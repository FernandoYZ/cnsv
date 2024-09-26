<?php

function PrimaryButton ($content, $uri) {
    $redirect = base_url("/{$uri}");

    echo "
    <button 
        type=\"button\"
        class=\"text-sm front-monserat py-2.5 px-3 border-[1px] border-white text-white hover:bg-white hover:border-white hover:text-neutral-900 transition\"
        onclick=\"window.location.href='{$redirect}'\"
        >
        {$content}
    </button>
    ";
}