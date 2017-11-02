<?php 

use App\Model\Category;
use App\Model\News;
use App\Model\Product;

if (!function_exists('isActiveRoute')) {
    
    /**
     * Active menu side bar when route menu is current route
     *
     * @param string $route  route of page
     * @param string $output active or ''
     *
     * @return string
     */
    function isActiveRoute($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
}

if (!function_exists('areActiveRoute')) {

    /**
     * Active menu side bar when routes menu are current route
     *
     * @param Array  $routes routes action
     * @param string $output active or ''
     *
     * @return string
     */
    function areActiveRoute(array $routes, $output = "active")
    {
        if (in_array(Route::currentRouteName(), $routes, true)) {
            return $output;
        }
    }
}
/**
 * Start string truncating
 */
const START_POSITION = 0;

/**
 * Length limit of content will be display
 */
const LIMIT_LENGTH = 100;

/**
 * Format utf-8 for truncating content unicode
 */
const UNICODE_FORMAT = 'utf-8';

/**
 * Suffix ..., after truncating content
 */
const SUFFIX = '...';
if (!function_exists('contentLimit')) {
    /**
     * Limit length of content
     *
     * @param string $content     string content
     * @param int    $limitLenght length content
     *
     * @return string
     */
    function contentLimit($content = '', $limitLenght = LIMIT_LENGTH)
    {
        $contentLength = strlen($content);
        $shortencontent = mb_substr(
            $content,
            START_POSITION,
            $limitLenght,
            UNICODE_FORMAT
        ) . SUFFIX;
        return ($contentLength > $limitLenght) ? $shortencontent : $content;
    }
}

if (!function_exists('getCategories')) {
    
    /**
     * Active menu side bar when route menu is current route
     *
     * @param string $route  route of page
     * @param string $output active or ''
     *
     * @return string
     */
    function getCategories()
    {
        $categories = Category::select('id', 'name', 'slug')->orderby('id', 'DESC')->limit(10)->get();
        return $categories;
    }
}

if (!function_exists('getNewsProduct')) {
    
    /**
     * Active menu side bar when route menu is current route
     *
     * @param string $route  route of page
     * @param string $output active or ''
     *
     * @return string
     */
    function getNewsProduct()
    {
        $newsproducts = Product::select('id', 'name', 'description', 'slug', 'category_id', 'created_at')->orderby('created_at', 'DESC')->limit(3)->get();
        return $newsproducts;
    }
}

if (!function_exists('getNews')) {
    
    /**
     * Active menu side bar when route menu is current route
     *
     * @param string $route  route of page
     * @param string $output active or ''
     *
     * @return string
     */
    function getNews()
    {
        $columns = [
            'id',
            'title',
            'slug',
            'image',
            'description',
            'content'
        ];
            
        $news = News::select($columns)
            ->orderby('id', 'DESC')->limit(3)->get();
        return $news;
    }
}