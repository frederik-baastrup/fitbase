<?php defined( 'ABSPATH' ) || exit; ?>
</main>
<footer class="site-footer">
	<div class="wrap">
		<div class="foot">
			<div class="foot__about">
				<img src="<?php echo esc_url( playform_asset( 'logo-white.svg' ) ); ?>" alt="Fitbase" width="146" height="26">
				<p>Fitnessudstyr fra danske webshops, samlet på én side – så du hurtigt får overblik, før du køber.</p>
				<span>kontakt@fitbase.dk</span>
			</div>
			<div class="foot__col">
				<span class="foot__title">Kategorier</span>
				<?php foreach ( array_slice( playform_menu(), 0, 7 ) as $item ) : ?>
					<a href="<?php echo esc_url( playform_category_url( $item['slug'] ) ); ?>"><?php echo esc_html( $item['label'] ); ?></a>
				<?php endforeach; ?>
			</div>
			<div class="foot__col">
				<span class="foot__title">Populære</span>
				<a href="<?php echo esc_url( playform_category_url( 'foldbart-lobebaand' ) ); ?>">Foldbare løbebånd</a>
				<a href="<?php echo esc_url( playform_category_url( 'gaabaand' ) ); ?>">Gåbånd</a>
				<a href="<?php echo esc_url( playform_category_url( 'spinningcykel' ) ); ?>">Spinningcykler</a>
				<a href="<?php echo esc_url( playform_category_url( 'kettlebell' ) ); ?>">Kettlebells</a>
				<a href="<?php echo esc_url( playform_category_url( 'traeningsmaatte' ) ); ?>">Træningsmåtter</a>
			</div>
			<div class="foot__col">
				<span class="foot__title">Viden</span>
				<a href="<?php echo esc_url( playform_guide_url() ); ?>">Købsguides</a>
				<a href="<?php echo esc_url( playform_campaign_url( 'black-friday' ) ); ?>">Black Friday</a>
				<a href="<?php echo esc_url( home_url( '/viden/' ) ); ?>">Nyheder</a>
			</div>
			<div class="foot__col">
				<span class="foot__title">Om Fitbase</span>
				<a href="<?php echo esc_url( playform_how_url() ); ?>"><?php echo esc_html( playform_how_title() ); ?></a>
				<a href="<?php echo esc_url( home_url( '/vores-butikker/' ) ); ?>">Vores butikker</a>
				<a href="<?php echo esc_url( home_url( '/saadan-tjener-vi-penge/' ) ); ?>">Sådan tjener vi penge</a>
				<a href="<?php echo esc_url( home_url( '/privatlivspolitik/' ) ); ?>">Privatlivspolitik</a>
				<a href="<?php echo esc_url( home_url( '/cookies/' ) ); ?>">Cookies</a>
			</div>
		</div>
		<div class="foot__bottom">
			<span>fitbase.dk indeholder annoncer. Handler du hos en af vores partnere efter at have klikket videre herfra, kan vi få en provision – uden at det koster dig ekstra. Priser og lager kan være ændret, siden vi sidst opdaterede.</span>
			<span>© <?php echo esc_html( wp_date( 'Y' ) ); ?> fitbase.dk · Mondae · CVR 37208329 · <button type="button" class="foot__link" data-cc-open>Cookie-indstillinger</button></span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
