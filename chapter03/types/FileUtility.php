<?php
/**
 * declare class FileUtility
 */
namespace Mattsmithdev\Markdown;

/**
 * Class FileUtility
 * @package Mattsmithdev\Markdown
 */
class FileUtility
{
    /**
     * @param $path
     * @return mixed <<<<<<<<< here is the PHP pseudo-type 'mixed' <<<<<<<<
     */
    public static function escapeSpacesInPath($path)
    {
        return str_replace(' ','\ ',$path);
    }
}
