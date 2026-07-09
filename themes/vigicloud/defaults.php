<?php

/**
 * VigiCloud Theme Defaults
 * Reemplaza el branding de Nextcloud por VigiCloud
 */

class OC_Theme {

	/**
	 * URL base del producto
	 */
	public function getBaseUrl(): string {
		return 'https://vigicloud.com';
	}

	/**
	 * URL de documentación
	 */
	public function getDocBaseUrl(): string {
		return 'https://vigicloud.com/docs';
	}

	/**
	 * Título largo — aparece en la pestaña del navegador: "Archivos - VigiCloud"
	 */
	public function getTitle(): string {
		return 'VigiCloud';
	}

	/**
	 * Nombre corto del producto
	 */
	public function getName(): string {
		return 'VigiCloud';
	}

	/**
	 * Nombre con HTML permitido
	 */
	public function getHTMLName(): string {
		return 'VigiCloud';
	}

	/**
	 * Entidad / empresa — para pie de página y copyright
	 */
	public function getEntity(): string {
		return 'VigiCloud';
	}

	/**
	 * Nombre del producto (usado en títulos de página)
	 */
	public function getProductName(): string {
		return 'VigiCloud';
	}

	/**
	 * Slogan
	 */
	public function getSlogan(): string {
		return 'Tu nube segura y privada';
	}

	/**
	 * Pie de página corto
	 */
	public function getShortFooter(): string {
		$entity = $this->getEntity();
		$footer = '© ' . date('Y');
		if ($entity !== '') {
			$footer .= ' <a href="' . $this->getBaseUrl() . '" target="_blank">' . $entity . '</a><br/>';
		}
		$footer .= $this->getSlogan();
		return $footer;
	}

	/**
	 * Pie de página largo
	 */
	public function getLongFooter(): string {
		return '© ' . date('Y') . ' <a href="' . $this->getBaseUrl() . '" target="_blank">' . $this->getEntity() . '</a>'
			. '<br/>' . $this->getSlogan();
	}

	/**
	 * Color primario (navbar, botones) — azul oscuro corporativo
	 */
	public function getColorPrimary(): string {
		return '#1a3a5c';
	}

	/**
	 * Color de fondo de pantalla de login
	 */
	public function getColorBackground(): string {
		return '#0f2540';
	}

	/**
	 * Variables SCSS para sobrescribir estilos del core
	 */
	public function getScssVariables(): array {
		return [
			'color-primary'    => '#1a3a5c',
			'color-background' => '#0f2540',
		];
	}

	/**
	 * Disable client links in welcome emails
	 */
	public function getSyncClientUrl(): string {
		return '';
	}

	public function getiOSClientUrl(): string {
		return '';
	}

	public function getAndroidClientUrl(): string {
		return '';
	}

	public function getFDroidClientUrl(): string {
		return '';
	}

	/**
	 * Override logo URL
	 */
	public function getLogo(bool $useSvg = false): string {
		return 'https://i.postimg.cc/QCgRKhBH/vigitec-logo.png';
	}
}
