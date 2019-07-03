<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Admin
 */

/**
 * Generates and displays a section containing metabox tabs that have been added by other plugins through the
 * `wpseo_tab_header` and `wpseo_tab_content` actions.
 */
class WPSEO_Metabox_Addon_Tab_Section extends WPSEO_Metabox_Tab_Sections {

	/**
	 * Applies the actions for adding a tab to the metabox.
	 */
	public function display_content() {
		?>
		<div role="tabpanel" id="wpseo-meta-section-addons" aria-labelledby="wpseo-meta-tab-addons" tabindex="0" class="wpseo-meta-section">
			<div class="wpseo-metabox-tabs-div">
				<ul class="wpseo-metabox-tabs">
					<?php do_action( 'wpseo_tab_header' ); ?>
				</ul>
				<?php do_action( 'wpseo_tab_content' ); ?>
			</div>
		</div>
		<?php
	}

	/**
	 * `WPSEO_Metabox_Addon_Section` always has "tabs", represented by registered actions. If this is not the case,
	 * it should not be instantiated.
	 *
	 * @return bool
	 */
	protected function has_sections() {
		return true;
	}
}
