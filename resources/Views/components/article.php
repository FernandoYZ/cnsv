<?php
function ArticleLeft($title, $imgSrc, $description) {
  return "
  <article class=\"flex flex-col lg:flex-row items-center gap-8 lg:gap-0 rounded-lg shadow-lg overflow-hidden bg-white mb-10\">
    <figure class=\"w-full lg:w-1/2 h-full relative overflow-hidden\">
      <img
        src=\"{$imgSrc}\"
        alt=\"{$title}\"
        class=\"w-full h-1/2 object-cover lg:h-full transition-transform duration-300 hover:scale-110\"
      />
      <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-1/2\"></div>
      <div class=\"absolute bottom-0 left-0 right-0 p-6 text-white xs:text-center text-center lg:text-left xl:text-left\">
        <h2 class=\"text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl\">{$title}</h2>
      </div>
      <figcaption class=\"sr-only\">Imagen representativa de {$title}</figcaption>
    </figure>
    <div class=\"w-full lg:w-1/2 p-8 lg:p-12 space-y-4\">
      <p class=\"text-gray-500 md:text-sm lg:text-sm xl:text-base\">{$description}</p>
    </div>
  </article>
  ";
}

function ArticleRight($title, $imgSrc, $description) {
  return "
  <article class=\"flex flex-col lg:flex-row-reverse items-center gap-8 lg:gap-0 rounded-lg shadow-lg overflow-hidden bg-white mb-10\">
    <figure class=\"w-full lg:w-1/2 h-full relative overflow-hidden\">
      <img
        src=\"{$imgSrc}\"
        alt=\"{$title}\"
        class=\"w-full h-1/2 object-cover lg:h-full transition-transform duration-300 hover:scale-110\"
      />
      <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-1/2\"></div>
      <div class=\"absolute bottom-0 left-0 right-0 p-6 text-white xs:text-center text-center lg:text-left xl:text-left\">
        <h2 class=\"text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl\">{$title}</h2>
      </div>
      <figcaption class=\"sr-only\">Imagen representativa de {$title}</figcaption>
    </figure>
    <div class=\"w-full lg:w-1/2 p-8 lg:p-12 space-y-4\">
      <p class=\"text-gray-500 md:text-sm lg:text-sm xl:text-base\">{$description}</p>
    </div>
  </article>
  ";
}
?>
