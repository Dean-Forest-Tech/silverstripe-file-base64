<?php

namespace DFT\SilverStripe\FileBase64;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataExtension;

class FileExtension extends DataExtension
{
    /**
     * Return a base 64 encoded version of this
     * file's data
     *
     * @return string
     */
    public function getBase64(): string
    {
        /** @var File */
        $file = $this->getOwner();
        $string = $file->getString();

        if (!empty($string)) {
            $string = base64_encode($string);
        }

        return (string)$string;
    }

    /**
     * Return base 64 encoded string that can be used
     * in URLs
     *
     * @return string
     */
    public function getBase64DataURL(): string
    {
        /** @var File */
        $file = $this->getOwner();
        $base64 = $file->getBase64();
        return "data:image/png;base64," . $base64;
    }
}
