#!/bin/bash

echo "Configurando VigiCloud en el VPS..."

# 1. Añadir el dominio del VPS a los dominios de confianza
docker exec nextcloud-app php occ config:system:set trusted_domains 1 --value="nextcloud-app"

# 2. Habilitar la app de OnlyOffice y configurarla
docker exec nextcloud-app php occ app:enable onlyoffice
docker exec nextcloud-app php occ config:app:set onlyoffice DocumentServerUrl --value="http://localhost:8082/"
docker exec nextcloud-app php occ config:app:set onlyoffice DocumentServerInternalUrl --value="http://onlyoffice/"
docker exec nextcloud-app php occ config:app:set onlyoffice StorageUrl --value="http://nextcloud-app/"
docker exec nextcloud-app php occ config:app:set onlyoffice jwt_secret --value="vigicloud_secret_2026"
docker exec nextcloud-app php occ config:app:set onlyoffice defFormats --value='{"docx":"true","xlsx":"true","pptx":"true","txt":"false","csv":"false"}'

# 3. Habilitar la app de Registration y configurarla
docker exec nextcloud-app php occ app:enable registration
docker exec nextcloud-app php occ config:app:set registration disable_email_verification --value="yes"
docker exec nextcloud-app php occ config:app:set registration default_quota --value="1 GB"
docker exec nextcloud-app php occ config:app:set registration action_on_success --value="login"

# 4. Habilitar la personalización de usuarios y el tema VigiCloud
docker exec nextcloud-app php occ config:system:set theme --value="vigicloud"
docker exec nextcloud-app php occ config:app:set theming disable-user-theming --value="0"

# 5. Ocultar el botón de descargar cliente en los correos
docker exec nextcloud-app php occ config:system:set customclient_desktop --value=""
docker exec nextcloud-app php occ config:system:set customclient_android --value=""
docker exec nextcloud-app php occ config:system:set customclient_ios --value=""

# 6. Actualizar la caché del tema
docker exec nextcloud-app php occ maintenance:theme:update

echo "¡Configuración de VigiCloud completada con éxito!"
