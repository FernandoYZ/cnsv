<?php

function PrimaryButton($content, $uri) {
    $redirect = base_url("/{$uri}");

    echo "
    <a 
    href=\"{$redirect}\"
    class=\"text-sm font-monserat py-2.5 px-3 border border-white text-white hover:bg-white hover:border-white hover:text-neutral-900 transition\"
    role=\"button\"
    aria-label=\"Ir a {$content}\"
    data-type=\"button-link\"
    >
        {$content}
    </a>
    ";
}