<footer class="font-monserat w-full bg-neutral-900 py-8 text-white">
    <div class="mx-auto max-w-6xl px-4 md:px-6">
        <div class="grid grid-cols-1 p-30 justify-between items-center gap-2 md:grid-cols-2">
            <div class="space-y-4 xs:px-4">
                <a class="justify-left ms:justify-center flex gap-2" href="#" rel="ugc">
                <?php
                renderImage(
                    'logo_cnsv', 
                    'Logo del ' . config('property_title'), 
                    config('description'),
                    'w-24 text-center'
                );
                ?>
                </a>
                <p class="text-sm text-muted lg:pr-60 md:pr-16"><?= config('description') ?></p>
            </div>
            <div class="lg:p-0 md:p-0 px-4 py-8 flex flex-col-2 items-center justify-between gap-8">
                <div class="space-y-4">
                    <h4 class="text-sm font-semibold uppercase">Secciones</h4>
                    <ul class="space-y-1">
                        <li><a class="text-sm hover:text-white" href="<?= base_url('/') ?>" rel="ugc">Inicio</a></li>
                        <li><a class="text-sm hover:text-white" href="<?= base_url('/about') ?>" rel="ugc">¿Quiénes somos?</a></li>
                        <li><a class="text-sm hover:text-white" href="<?= base_url('/visit') ?>" rel="ugc">Visítanos</a></li>
                        <li><a class="text-sm hover:text-white" href="<?= base_url('/donation') ?>" rel="ugc">Donaciones</a></li>
                    </ul>
                    <?php PrimaryButton('¡Inicia ya!', 'admission');?>
                </div>
                <div class="space-y-4">
                    <h4 class="text-sm font-semibold uppercase">Contacto</h4>
                    <ul class="space-y-1 mb-4">
                        <h5 class="text-sm font-semibold">Dirección</h5>
                        <p class="text-xs"><?= config('address') ?></p>
                    </ul>
                    <ul class="space-y-1 mb-4">
                        <h5 class="text-sm font-semibold">Teléfonos</h5>
                        <p class="text-xs"><?= config('phone') ?></p>
                        <p class="text-xs"><?= config('phone') ?></p>
                    </ul>
                    <ul class="space-y-1 mb-4">
                        <h5 class="text-sm font-semibold">Correo electrónico</h5>
                        <p class="text-xs"><?= config('email') ?></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include layout('partials.copyright'); ?>
