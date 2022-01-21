<?php

namespace App\Helper;

use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FileHelper {
    
    public function loadImage($image, $slugger)
    {
        if ($image) {
            $originalFilename = pathinfo($image->get, PATHINFO_FILENAME);

            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'-'.$image->guessExtension();

            try {
                $image->move("media/admins", $newFilename);
            } catch (FileException $e) {
                // handle exception
            }

            return $newFilename;
        }
    }

}