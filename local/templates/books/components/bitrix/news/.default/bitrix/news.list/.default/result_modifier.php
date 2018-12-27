<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


foreach ($arResult['ITEMS'] as &$item) {
    if (!empty($item['PREVIEW_PICTURE'])) {
        $picture = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 300,
                'height' => 300
            ],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
        $item['PREVIEW_PICTURE']['SRC'] = $picture['src'];
        $item['PREVIEW_PICTURE']['WIDTH'] = $picture['width'];
        $item['PREVIEW_PICTURE']['HEIGHT'] = $picture['height'];
    }
};