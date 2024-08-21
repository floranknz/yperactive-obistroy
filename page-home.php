<?php
/*
Template Name: Home
*/

get_header();
?>

<?php 
    $block1 = get_field("bloc-1");
    $block2 = get_field("bloc-2");
    $block3 = get_field("bloc-3");
?>

<div class="hero-full flex flex-col gap-48 items-center justify-center h-screen bg-sage-400 text-pure-white px-24">
    <div class="md:container flex flex-row justify-center">
        <div class="content flex md:w-1/2 gap-8 flex-col justify-center items-center text-center">
            <span class="pretitle-1 animatecss animatecss-fadeInDown">Restaurant - Bar à cocktails - Bar à vin</span>
            <h1 class="title-1 text-pure-white animatecss animatecss-fadeInDown mb-8">Urban food lounge</h1>
            <p class="animatecss animatecss-fadeInDown">Niché au dernier étage, au coeur d’un espace végétalisé, profitez d’une carte de mets et cocktails préparés avec attention.</p>
            <a class="btn btn-primary mt-24" href="https://bookings.zenchef.com/results?rid=367697" target="_blank">Réserver une table</a>
        </div>
    </div>
    <i class="bx bx-sm bx-down-arrow-circle absolute mt-[350px] animatecss animatecss-pulse animatecss-infinite"></i>
</div>
<div class="bloc-2 container flex flex-col max-sm:flex-col gap-32 lg:flex-row justify-between items-center my-80 max-md:overflow-hidden">
    <div class="basis-1/2 relative">
        <img src="<?= get_field('intro-image') ?>" alt="alt" class="rounded z-10 relative" />
    </div>
    <div class="content basis-5/12">
        <span class="pretitle-1 text-copper-red-600"><?= esc_html( get_field('intro-pretitle') ) ?></span>
        <h2 class="title-1 mt-8"><?= esc_html( get_field('intro-title') ) ?></h2>
        <p class="mb-24">
            <?= esc_html( get_field('intro-content') ) ?>
        </p>
    </div>
</div>

<?php
    $dblock1 = get_field('block-1');
    $dblock2 = get_field('block-2');
?>
<div class="side-by-side container flex flex-col md:flex-row gap-24 h-[600px] text-pure-white">
    <div class="side-item bg-sage-100 flex flex-col w-full justify-end text-center p-64 md:pb-40 md:px-64 gap-8 rounded w-1/2 shadow-md" style="
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.00)41.79%, rgba(0, 0, 0, 0.81)82.76%), linear-gradient(0deg, rgba(0, 0, 0, 0.10)0%, rgba(0, 0, 0, 0.10)100%), url(<?= $dblock1['background'] ?>) lightgray 50% / cover no-repeat;
    ">
        <h2 class="title-1 mb-0 text-pure-white"><?= $dblock1['title'] ?></h2>
        <p><?= $dblock1['subtitle1'] ?></p>
        <div class="btncontainer">
            <a class="btn btn-primary mt-16" href="<?= $dblock1['link'] ?>"><?= $dblock1['link_label'] ?></a>
        </div>
    </div>
    <div class="side-item bg-sage-100 flex flex-col w-full justify-end text-center p-64 md:pb-40 md:px-64 gap-8 rounded w-1/2 shadow-md" style="
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.00)41.79%, rgba(0, 0, 0, 0.81)82.76%), linear-gradient(0deg, rgba(0, 0, 0, 0.10)0%, rgba(0, 0, 0, 0.10)100%), url(<?= $dblock2['background'] ?>) lightgray 50% / cover no-repeat;
    ">
        <h2 class="title-1 mb-0 text-pure-white"><?= $dblock2['title'] ?></h2>
        <p><?= $dblock2['subtitle2'] ?></p>
        <div class="btncontainer">
            <a class="btn btn-primary mt-16" href="<?= $dblock2['link'] ?>"><?= $dblock2['link_label'] ?></a>
        </div>
    </div>
</div>

<div class="socialfeed my-80">
    <?= do_shortcode('[insta-gallery id="0"]') ?>
</div>

<div class="useful-informations container mb-80 flex flex-col lg:flex-row gap-24">
    <div class="timetable w-full lg:w-1/2 bg-soft-white-50 rounded shadow-sm p-24">
        <h2 class="title-2 text-center mb-24 text-sage-600">Horaires</h2>

        <?php
            if( have_rows('timetable-list') ):
                while( have_rows('timetable-list') ) : the_row();
                    $period = get_sub_field('period');
                    $times = get_sub_field('times');
        ?>
        <span class="pretitle-1"><?= $period ?></span>
        <p><?= $times ?></p>
        <?php
                endwhile;
            endif;
        ?>
        <?php if( get_field('caption') ): ?>
            <span class="caption"><?= the_field('caption') ?></span>
        <?php endif; ?>
    </div>
    <div class="address w-full lg:w-1/2 bg-soft-white-50 rounded shadow-sm p-24">
        <h2 class="title-2 text-center mb-24 text-sage-600">Informations pratiques</h2>
        <div class="info-item flex items-center gap-24 mb-24">
            <div class="icon float-left w-40 h-40 flex items-center justify-center bg-sage-600 text-pure-white rounded-full">
                <i class="bx bx-sm bxs-map"></i>
            </div>
            <div class="content">
                <span class="pretitle-1">Accès</span>
                <p>28 Avenue de Pythagore, 33700 Mérignac (Parking gratuit)</p>
            </div>
        </div>
        <div class="info-item flex items-center gap-24 mb-24">
            <div class="icon float-left w-40 h-40 flex items-center justify-center bg-sage-600 text-pure-white rounded-full">
                <i class="bx bx-sm bxs-phone"></i>
            </div>
            <div class="content">
                <span class="pretitle-1">Téléphone</span>
                <p>05 19 08 10 11</p>
            </div>
        </div>
        <div class="info-item flex items-center gap-24 mb-24">
            <div class="icon float-left w-40 h-40 flex items-center justify-center bg-sage-600 text-pure-white rounded-full">
                <i class="bx bx-sm bx-calendar"></i>
            </div>
            <div class="content">
                <span class="pretitle-1">Réservations</span>
                <p><a href="https://bookings.zenchef.com/results?rid=367697" target="_blank" class="text-chocolate-700 underline">Réserver une table en ligne</a></p>
            </div>
        </div>
    </div>
</div>

<div class="bloc-2 container flex flex-col gap-32 lg:flex-row-reverse justify-between items-center my-80">
    <div class="basis-1/2">
        <img src="<?= get_field('ospa-image') ?>" alt="alt" class="rounded" />
    </div>
    <div class="content basis-5/12">
        <span class="pretitle-1 text-copper-red-600"><?= esc_html( get_field('ospa-pretitle') ) ?></span>
        <h2 class="title-1 mt-8"><?= esc_html( get_field('ospa-title') ) ?></h2>
        <p class="mb-24">
            <?= esc_html( get_field('ospa-content') ) ?>
        </p>
        <a class="btn btn-primary" href="https://spa-merignac.com">Découvrir</a>
    </div>
</div>

<?php get_footer(); ?>