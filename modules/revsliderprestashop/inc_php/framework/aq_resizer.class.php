<?php
/**
* 2016 Revolution Slider
*
*  @author    SmatDataSoft <support@smartdatasoft.com>
*  @copyright 2016 SmatDataSoft
*  @license   private
*  @version   5.1.3
*  International Registered Trademark & Property of SmatDataSoft
*/

if (!class_exists('RevAqResize')) {
    class RevAqResize
    {
        private static $instance = null;
        private function __construct()
        {
        }
        private function __clone()
        {
        }
        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new self;
            }

            return self::$instance;
        }
        public function process($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
        {
            if (! $url || (! $width && ! $height)) {
                return false;
            }
//            $upload_dir = UniteFunctionsWPRev::getUrlUploads();
//            $upload_url = uploads_url();
//            
//            $http_prefix = "http://";
//            $https_prefix = "https://";
//            if (!strncmp($url, $https_prefix, Tools::strlen($https_prefix))) {
//                $upload_url = str_replace($http_prefix, $https_prefix, $upload_url);
//            } elseif (!strncmp($url, $http_prefix, Tools::strlen($http_prefix))) {
//                $upload_url = str_replace($https_prefix, $http_prefix, $upload_url);
//            }
//            if (false === strpos($url, $upload_url)) {
//                return false;
//            }
//            $rel_path = str_replace($upload_url, '', $url);
//            $img_path = $upload_dir . $rel_path;
//            if (! file_exists($img_path) or ! getimagesize($img_path)) {
//                return false;
//            }
//            $info = pathinfo($img_path);
//            $ext = $info['extension'];
//            list($orig_w, $orig_h) = getimagesize($img_path);
//            $dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
//            $dst_w = $dims[4];
//            $dst_h = $dims[5];
//            if (! $dims && (((null === $height && $orig_w == $width) xor (null === $width && $orig_h == $height)) xor ($height == $orig_h && $width == $orig_w))) {
//                $img_url = $url;
//                $dst_w = $orig_w;
//                $dst_h = $orig_h;
//            } else {
//                $suffix = "{$dst_w}x{$dst_h}";
//                $dst_rel_path = str_replace('.' . $ext, '', $rel_path);
//                $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";
//
//                if (! $dims || (true == $crop && false == $upscale && ($dst_w < $width || $dst_h < $height))) {
//                    return false;
//                } elseif (file_exists($destfilename) && getimagesize($destfilename)) {
//                    $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
//                } else {
//                    $editor = wp_get_image_editor($img_path);
//                    if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, $crop))) {
//                        return false;
//                    }
//                    $resized_file = $editor->save();
//                    if (! is_wp_error($resized_file)) {
//                        $resized_rel_path = str_replace($upload_dir, '', $resized_file['path']);
//                        $img_url = $upload_url . $resized_rel_path;
//                    } else {
//                        return false;
//                    }
//                }
//            }
//
//
//            if (true === $upscale) {
//                remove_filter('image_resize_dimensions', array( $this, 'aqUpscale' ));
//            }
//
//
//            if ($single) {
//                $image = $img_url;
//            } else {
//                $image = array(
//                    0 => $img_url,
//                    1 => $dst_w,
//                    2 => $dst_h
//                );
//            }
//
//            return $image;
        }

    
        public function aqUpscale($default, $orig_w, $orig_h, $dest_w, $dest_h, $crop)
        {
            if (! $crop) {
                return null;
            }
            $aspect_ratio = $orig_w / $orig_h;
            $new_w = $dest_w;
            $new_h = $dest_h;

            if (! $new_w) {
                $new_w = (int)($new_h * $aspect_ratio);
            }

            if (! $new_h) {
                $new_h = (int)($new_w / $aspect_ratio);
            }

            $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

            $crop_w = round($new_w / $size_ratio);
            $crop_h = round($new_h / $size_ratio);

            $s_x = floor(($orig_w - $crop_w) / 2);
            $s_y = floor(($orig_h - $crop_h) / 2);

            return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
        }
    }
}





if (!function_exists('rev_aq_resize')) {
    function rev_aq_resize($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
    {
        $aq_resize = RevAqResize::getInstance();
        return $aq_resize->process($url, $width, $height, $crop, $single, $upscale);
    }
}
