<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\ProjectCreateRequest;
use App\Http\Requests\Projects\ProjectUpdateRequest;
use App\Model\Project;
use File;
use Illuminate\Http\Request;
use Image;
use Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::select('id', 'title', 'description', 'content')->paginate(10);
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCreateRequest $request)
    {
        $arrProjects = $request->all();
        $arrProjects = $request->except(['_token']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . "-" . $file->getClientOriginalName();
            $arrProjects['image'] = $fileName;
        } else {
            $arrProjects['image'] = config('constant.default_image');
        }
        if (Project::create($arrProjects)) {
            if ($request->hasFile('image')) {
                Image::make($file)->save(public_path(config('constant.path_upload_projects'). $fileName));
            }
            flash(__('Tạo dự án thành công'))->success()->important();
            return redirect()->route('projects.index');
        } else {
            flash(__('Tạo dự án thất bại'))->error()->important();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('backend.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $dataProjects = $request->except('_method', '_token');
        $oldPathImage = $project->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . "-" . $file->getClientOriginalName();
            $dataProjects['image'] = $fileName;
        }
        if ($project->update($dataProjects)) {
            if ($request->hasFile('image')) {
                Image::make($file)->save(public_path(config('constant.path_upload_projects'). $fileName));
                File::delete($oldPathImage);
            }
            flash(__('Sửa Dự Án thành công!'))->success()->important();
               return redirect()->route('projects.index');
        } else {
            flash(__('Sửa Dự Án thất bại'))->error()->important();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::findOrFail($id)->delete();
        if ($projects) {
            flash(__('Xóa dự án thành công!'))->success();
            return redirect()->route('projects.index');
        } else {
            flash(__('Xóa dự án thất bại!'))->error();
            return redirect()->route('projects.index');
        }
    }
}
