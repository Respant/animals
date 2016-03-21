<?php
namespace AG\Animals\Helper;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

class DataHelper {
    /**
     * Get config settings
     *
     * @return array
     */
    public static function getConfigData() {
        return include __DIR__ . '/../../../app/config/config.php';
    }

    /**
     * Get config settings
     *
     * @param string $fileName
     * @return array
     */
    public static function getFilePath($fileName) {
        return __DIR__ . '/../../../files/' . $fileName;
    }

    /**
     * Get items split up by categories from file
     *
     * @return array
     */
    public static function parseCategories() {
        $configData = self::getConfigData();
        $fileName = $configData['fileName'];
        $categories = array_keys($configData['categories']);
        $filePath =  self::getFilePath($fileName);

        $file = new \SplFileObject($filePath, 'r');
        $file->setFlags(\SplFileObject::DROP_NEW_LINE | \SplFileObject::SKIP_EMPTY);

        // Probably a little bit difficult but without "if"
        $result = [];
        $regExp = '/(' . implode(')|(', $categories) . ')/i';
        $line = $file->fgets();
        while(!$file->eof() && $line) {
            preg_match($regExp, $line, $m);
            $category = strtolower($m[0]);

            while(($line = $file->fgets()) && !preg_match($regExp, $line)) {
                $result[$category][] = $line;
            }
        }

        return $result;
    }
}