<?php

function renderImage($imageName, $altText, $description, $customClasses = '') {
    $webpImage = images("/{$imageName}.webp");
    $pngImage = images("/{$imageName}.png");
    $smallImage = images("/{$imageName}-small.png");
    $mediumImage = images("/{$imageName}-medium.png");
    $largeImage = images("/{$imageName}-large.png");

    if (!$pngImage) {
        return "<p>Imagen no disponible.</p>";
    } else {
        $srcset = [];
        if (file_exists($smallImage)) {
            $srcset[] = "{$smallImage} 500w";
        }
        if (file_exists($mediumImage)) {
            $srcset[] = "{$mediumImage} 1000w";
        }
        if (file_exists($largeImage)) {
            $srcset[] = "{$largeImage} 1500w";
        }

        $srcsetStr = implode(', ', $srcset);

        $sourceTag = file_exists($webpImage) ? "<source srcset=\"{$webpImage}\" type=\"image/webp\">" : '';

        echo "
        <figure>
            <picture>
                {$sourceTag}
                <img 
                    src=\"{$pngImage}\" 
                    alt=\"{$altText}\" 
                    loading=\"lazy\" 
                    srcset=\"" . (!empty($srcsetStr) ? $srcsetStr : '') . "\"
                    class=\"{$customClasses}\"
                >
            </picture>
            <figcaption class=\"sr-only\">{$description}</figcaption>
        </figure>
        ";
    }
}

