<?php
/**
 * Abonnements
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<div class="container mb-80">
    <div class="intro text-center mb-32">
        <h2 class="title-1 mb-16">Les abonnements</h2>
        <p>Profitez d’un accès illimité à toutes les installations de notre espace aqua-sensoriel et bénéficiez d’avantages exclusifs. Rendez-vous au comptoir d’O’Spa ou contactez-nous pour souscrire à votre abonnement O’Pass et profiter de tous vos avantages.</p>
    </div>
    <div class="subscriptions flex flex-col md:flex-row gap-24">
        <div class="subscription-item w-full md:w-1/2 flex flex-col justify-between grow-1 rounded shadow-md px-24 py-32 bg-soft-white-50">
            <ul class="subscription-content flex flex-col">
                <div class="subscription-name flex flex-col items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oclub-logo.png" class="w-80" alt="O'Club" />
                    <h3 class="title-1">Access</h3>
                </div>
                <div class="subscription-details list-disc leading-10 list-inside mb-48 min-h-[200px]">
                    <li>Accès illimité à l’espace aqua-sensoriel, selon formule</li>
                    <li>10% de réduction sur les soins et les produits</li>
                    <li>10% de réduction au restaurant O’Bistroy</li>
                    <li>Invitation à offrir pour profiter de l’espace aqua-sensoriel*</li>
                </div>
            </ul>
            <div class="subscription-pricing border-t border-chocolate-100">
                <div class="pricing-item flex flex-col items-center border-b border-chocolate-100 py-24">
                    <span class="pretitle-1 text-copper-red-600">En semaine (avant 17h)</span>
                    <span class="title-3">90 € / mois (engagement 12 mois)</span>
                    <span class="body-2">120 € / mois (engagement 3 mois)</span>
                </div>
                <div class="pricing-item flex flex-col items-center border-b border-chocolate-100 py-24">
                    <span class="pretitle-1 text-copper-red-600">En semaine (all day)</span>
                    <span class="title-3">120 € / mois (engagement 12 mois)</span>
                    <span class="body-2">160 € / mois (engagement 3 mois)</span>
                </div>
                <div class="pricing-item flex flex-col items-center pt-24">
                    <span class="pretitle-1 text-copper-red-600">7/7j (all day)</span>
                    <span class="title-3">150 € / mois (engagement 12 mois)</span>
                    <span class="body-2">200 € / mois (engagement 3 mois)</span>
                </div>
            </div>
        </div>
        <div class="subscription-item w-full md:w-1/2 flex flex-col justify-between grow-1 rounded shadow-md px-24 py-32 bg-soft-white-50">
            <ul class="subscription-content flex flex-col">
                <div class="subscription-name flex flex-col items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oclub-logo.png" class="w-80" alt="O'Club" />
                    <h3 class="title-1">Premium</h3>
                </div>
                <div class="subscription-details list-disc leading-10 list-inside mb-48 min-h-[200px]">
                    <li>Accès illimité à l’espace aqua-sensoriel, selon formule</li>
                    <li>15% de réduction sur les soins et les produits</li>
                    <li>15% de réduction au restaurant O’Bistroy</li>
                    <li>Invitation à offrir pour profiter de l’espace aqua-sensoriel*</li>
                    <li class="body-1 text-sage-400">1 soin au choix offert chaque mois**</li>
                </div>
            </ul>
            <div class="subscription-pricing border-t border-chocolate-100 h-full flex justify-center items-center">
                <div class="pricing-item flex flex-col items-center pt-24">
                    <span class="pretitle-1 text-copper-red-800">7/7j (all day)</span>
                    <span class="title-3">190 € / mois (engagement 12 mois)</span>
                    <span class="body-2">240 € / mois (engagement 3 mois)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="legals mt-24 text-chocolate-400">
        <p>
            * 1 invitation pour les formules 3 mois d'engagement, 5 invitations pour les formules 12 mois.</br>
            ** Parmi les soins suivants : Massage sur mesure 30’, Diagnostic de peau et soins visage flash 30’, Hydromassage 20’ ou 3 séances de cryothérapie.
        </p>
    </div>
</div>