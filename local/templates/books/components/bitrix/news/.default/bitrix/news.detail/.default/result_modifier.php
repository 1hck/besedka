<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


    if (!empty($arResult['DETAIL_PICTURE'])) {
        $picture = CFile::ResizeImageGet(
            $arResult['DETAIL_PICTURE']['ID'],
            [
                'width' => 600,
                'height' => 600
            ],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
        $arResult['DETAIL_PICTURE']['SRC'] = $picture['src'];
        $arResult['DETAIL_PICTURE']['WIDTH'] = $picture['width'];
        $arResult['DETAIL_PICTURE']['HEIGHT'] = $picture['height'];
    };
