#  $Id: install.php v1.0 2012-12-08 datazen $
#
#  LoadedCommerce, Innovative eCommerce Solutions
#  http://www.loadedcommerce.com
#
#  Copyright (c) 2012 Loaded Commerce, LLC
#
#  @author     LoadedCommerce Team
#  @copyright  (c) 2012 LoadedCommerce Team
#  @license    http://loadedcommerce.com/license.html

page_title_installation = Nueva Instalacion

page_heading_step_1 = Rutas de Actualizacion
page_heading_step_2 = Servidor Web
page_heading_step_3 = Parametros Tienda Online
page_heading_step_4 = ¡Finalizado!

text_installation = Esta rutina de instalacion basada en web instalara y configurara correctamente Loaded Commerce para correr en este servidor. Por favor siga las instrucciones de la pantalla que le llevara a traves del servidor de base de datos, del servidor web, y las opciones de ocnfiguracion de la tienda. Si necesitara ayuda en cualquier etapa, por favor consulte la documentacion o busque ayuda en los foros de soporte comunitario.
text_successful_installation = ¡La instalacion y configuracion fueron exitosas!
text_go_to_shop_after_cfg_file_is_saved = Por favor visite su tienda despues de que el archivo de configuracion haya sido grabado:
text_go = Ir

param_database_server = Anfitrion de la Base de Datos
param_database_server_description = La direccion del servidor de base de datos en la forma de hostname o direccion IP.
param_database_username = Nombre de Usuario
param_database_username_description = EL nombre de usuario para conectarse al servidor de base de datos.
param_database_password = Contraseña
param_database_password_description = La contraseña que es utilizada conjuntamente con el nombre de usuario para conectarse con el servidor de la base de datos.
param_database_name = Nombre de la Base de Datos
param_database_name_description = El nombre de la base de datos donde se mantienen los datos.
param_database_type = Tipo de Base de Datos
param_database_type_description = El software de la base de datos que se utiliza.
param_database_prefix = Prefijo de la Tabla
param_database_prefix_description = El prefijo a utilizar para las tablas de la base de datos (opcional).
param_database_import_sample_data = Importar Datos de Ejemplo
param_database_import_sample_data_description = Se recomienda insertar los datos de ejemplo dentro de la base de datos para las instalaciones de primera vez.

param_existing_install_path = Ruta de Instalacion
param_existing_install_path_description = ruta del directorio en su servidor donde su carrito existente esta instalado 

param_database_file_path = Ruta de Archivo SQL
param_database_file_path_description = ruta a su archivo SQL.

param_web_address = Direccion HTTP
param_web_ssl_address = Direccion HTTPS
param_web_address_description = El servidor web (http://) a la tienda online.
param_web_ssl_address_description = La direccion web (https://) a la tienda online.
param_web_root_directory = Directorio Raiz
param_web_use_ssl = ¿Utilizar SSL?
param_web_use_ssl_description = Seleccione para habilitar SSL (https://) en su sitio.  Si no lo selecciona, la direccion WWW (http://) sera utilizada.
param_web_root_directory_description = El directorio donde la tienda online esta instalado en el servidor.
param_web_work_directory = Directorio de Trabajo
param_web_work_directory_description = El directorio de trabajo para archivos creados temporalmente. (Servidores de hospedaje compartido no deberian utilizar /tmp/)


param_store_name = Nombre de la Tienda
param_store_name_description = El nombre de la tienda online que se presentara al publico.
param_store_owner_first_name = Nombre
param_store_owner_first_name_description = Nombre del dueño de la tienda que se presentara al publico.
param_store_owner_last_name = Apellido
param_store_owner_last_name_description = Apellido del dueño de la tienda que se presentara al publicoc.
param_store_owner_email_address = E-Mail del Dueño de la Tienda
param_store_owner_email_address_description = La direccion de e-mail del dueño de la tienda que se presentara al publico.
param_administrator_username = Email Administrador
param_administrator_username_description = Nombre de usuario que se utilizara para la herramienta de administracion.
param_administrator_password = Contraseña Administrador
param_administrator_password_description = La contraseña a utilizar para la cuenta administradora.

box_info_step_1_title = Ruta a la Instalacion Existente
box_info_step_1_text = Ruta a la Instalacion Existente texto descriptivo.

box_info_step_1_title_R = Valores de Conexion de la Base de Datos Remota
box_info_step_1_text = Valores de Conexion de la Base de Datos Remota Texto Descripcion.

box_info_step_1_title_D = Ruta al Archivo de Base de Datos
box_info_step_1_text = Ruta al Archivo de Base de Datos Texto Descripcion.
                                                                                                                              
box_info_step_2_title = Servidor Web                                                                                            
box_info_step_2_text = El Servidor web se encarga de servir las paginas de la tienda online a los visitantes y clientes. Los parametros del servidor web se aseguran que las ligas a las paginas apunten a la localidad correcta. Los archivos temporales tales como los datos de sesion y archivos de cache son almacenados en el directorio de trabajo. Es importante que este directorio sea localizado fuera del directorio raiz del servidor web y este protegido del acceso publico.

box_info_step_3_title = Parametros de la Tienda
box_info_step_3_text = Aqui puede definir el nombre de su tienda online, y la informacion de contacto para el dueño de la tienda.  El nombre de usuario y contraseña son utilizados para autentificarse dentro de la seccion protegida de la herramienta administrativa.

box_info_step_4_title = ¡Finalizado!
box_info_step_4_text = ¡Felicitaciones por Instalar y Configurar Loaded Commerce como su solucion de tienda online! Le deseamos lo mejor con su tienda online y lo invitamos a unirse y participar en nuestra comunidad.<br /><br /><span style="float:right;">- El Equipo de Loaded Commerce</span>
box_info_step_5_text = Su ID de instalacion es

rpc_database_connection_test = Probando la conexion a la base de datos...
rpc_database_connection_error = There was a problem connecting to the database server. The following error occured: <b>%s</b>.  Please verify the connection parameters and try again.
rpc_database_connected = Successfully connected to the database.
rpc_database_importing = The database structure is now being imported. Please be patient during this procedure.
rpc_database_imported = Database imported successfully.
rpc_database_import_error = There was a problem importing the database. The following error occured: <b>%s</b>. Please verify the connection parameters and try again.

rpc_work_directory_test = Testing work directory...
rpc_work_directory_error_non_existent = There was a problem accessing the working directory. The following error occured: <b>The directory does not exist: %s</b>. Please verify the directory and try again.
rpc_work_directory_error_not_writeable = There was a problem accessing the working directory. The following error occured: <b>The webserver does not have write permissions to the directory: %s</b>. Please verify the permissions of the directory and try again.
rpc_work_directory_configured = Working directory successfully configured.

rpc_database_sample_data_importing = The sample data is now being imported into the database. Please be patient during this procedure.
rpc_database_sample_data_imported = Database sample data imported successfully.
rpc_database_sample_data_import_error = There was a problem importing the database sample data. The following error occured: <b>%s</b>. Please verify the database server and try again.

rpc_configfile_verified = config file verified
rpc_sqlfile_verified = SQL file verified 

rpc_configfile_error = No previous installation found. Please check the path and/or permissions
rpc_sqlfile_error = Cannot locate source configuration file 

param_import_categories = CATEGORIES
param_import_categories_description = importing Category data 

param_import_products = PRODUCTS
param_import_products_description = importing Product data

param_import_attributes = ATTRIBUTES
param_import_attributes_description = importing Product Attributes data

param_import_customers = CUSTOMERS
param_import_customers_description = importing Customer data 

param_import_customer_groups = CUSTOMER GROUPS
param_import_customer_groups_description = importing Customer Groups data

param_import_orders = ORDERS 
param_import_orders_description = importing Orders data

param_import_cds = CONTENT DIRECTOR 
param_import_cds_description = importing Content Director data 

param_import_admin = ADMINISTRATORS 
param_import_admin_description = importing Administrator data 

param_import_newsletter = NEWSLETTER 
param_import_newsletter_description = importing Newsletter data 

param_import_banners = BANNERS 
param_import_banners_description = importing Banner data 

param_import_config = CONFIGURATION 
param_import_config_description = importing Configuration data 

param_import_coupon = COUPONS 
param_import_coupon_description = importing Coupon data 

param_import_tax = TAX CLASSES/RATES 
param_import_tax_description = importing Tax Class and Rate data 

rpc_upgrade_success = import completed
rpc_upgrade_inprogress = import in progress

param_upgrade_existing_store = Existing Store name
param_upgrade_store_name = Store Name
param_upgrade_store_admin = Admin Name
param_upgrade_store_dbase = Existing Database

param_upgrade_step1_title_confirm = Existing Store Configuration
param_upgrade_step1_desc_confirm = The following store information was located. If this is correct, click 'Continue' below. To select a different store, click 'Back'.

upgrade_step2_title = New Database Settings
upgrade_step2_desc = Please enter settings of the new database. The new database must be empty. The installer will copy your existing data to this new database .

upgrade_step2_title_success = New Database Settings
upgrade_step2_desc_success = Successfully conected to the database server .

upgrade_step3_title = Database Import
upgrade_step3_desc = The installer will copy the existing database to the new database and convert the data to work with Loaded7 . This may take a few minutes. Please do not close the browser, press the back button or navigate away from this page .

image_button_retry = Retry

upgrade_nav_text_1 = Welcome
upgrade_nav_text_2 = Upgrade Path
upgrade_nav_text_3 = Configure
upgrade_nav_text_4 = Settings
upgrade_nav_text_5 = Finished 

upgrade_main_page_title = Upgrade From 6.x Version
upgrade_main_page_desc = Use this option if you have a previous version of Loaded Commerce, also known as CRE Loaded. Upgradeable versions are 6.2 and up ( 6.3, 6.4, 6.5 ) Standard, Community Edition, Pro and B2B.

upgrade_main_option_same = Same Server
upgrade_main_option_same_desc = Your previous installation is located on the same server /hosting space as the new installation and this script can access it's configure file to auto configure necessary connections.

upgrade_main_option_remote = Remote Server
upgrade_main_option_remote_desc = Your previous installation is located on another server with remote DB access. You will need to configure all aspects of the store but the database will be converted automatically.

upgrade_main_option_dbfile = Database File
upgrade_main_option_dbfile_desc = No previous installation but have a database backup of your old store? We can attempt to convert the data however you will need to configure all aspects of the store after the upgrade.

upgrade_step1_page_title = Path to Existing Installation
upgrade_step1_page_desc = Enter the directory path to your existing installation.

upgrade_step1_page_title_confirm = Existing Store Configuration
upgrade_step1_page_desc_confirm = The following store information was located. If this is correct, click 'Continue' below. To select a different store, click 'Back'.
upgrade_step1_label = Path to existing install

upgrade_step1_err_pathsame = The existing store file system path cannot match the currently executing file system path
upgrade_step1_err_noconfig = The exisiting store configuration files (admin/includes/configure.php) cannot be accessed

upgrade_step1_err_noserver	= The existing store file (admin/includes/configure.php) missing the value of DB_SERVER
upgrade_step1_err_nouid 		= The existing store file (admin/includes/configure.php) missing the value of DB_SERVER_USERNAME
upgrade_step1_err_nopass 		= The existing store file (admin/includes/configure.php) missing the value of DB_SERVER_PASSWORD
upgrade_step1_err_nodb 			= The existing store file (admin/includes/configure.php) missing the value of DB_DATABASE
upgrade_step1_err_noimage		= The existing store file (admin/includes/configure.php) missing the value of DIR_WS_IMAGES

upgrade_step2_page_title = New Database Settings
upgrade_step2_page_desc = Please enter settings of the new database. The new database must be empty. The installer will copy your existing data to this new database .

upgrade_step2_page_title_success = New Database Settings
upgrade_step2_page_desc_success = Successfully connected to the database server .

upgrade_step3_page_title = Database Import
upgrade_step3_page_desc = The installer will copy the existing database to the new database and convert the data to work with Loaded7 . This may take a few minutes. Please do not close the browser, press the back button or navigate away from this page .
upgrade_step3_page_errfound = ERROR(S) FOUND . Please correct to proceed

upgrade_step4_page_title = Importar Imagenes
upgrade_step4_page_desc = El Instalador copiara las imagenes existentes a la nueva base de datos y convertira los datos para trabajar con Loaded7. Esto podria tomar unos minutos. Por favor no cierre el navegador, presione el boton de regresar o nabege lejos de esta pagina.

upgrade_step4_label_import_product_images = Imagenes de Productos
upgrade_step4_label_import_categ_images = Imagenes de Categorias

upgrade_step4_odesc_import_product_images = importar imagenes de productos
upgrade_step4_odesc_import_categ_images = importar imagenes de categorias

upgrade_step4_import_product_images_zipcreateerror = incapaz de crear el archivo zip para las imagenes de productos
upgrade_step4_import_product_images_zipextracterror = incapaz de extraer las imagenes de productos comprimidas al directorio destino
upgrade_step4_import_category_images_zipcreateerror = incapaz de crear el archivo zip para las imagenes de categorias
upgrade_step4_import_category_images_zipextracterror = incapaz de extraer las imagenes de categorias comprimidas al directorio destino

upgrade_step4_zipoverrideerror = incapaz de sobreescribir el archivo zip existente
upgrade_step4_zipopenerror = incapaz de abrir el archivo zip para su escritura
upgrade_step4_zipextracterror = incapaz de extraer el archivo zip al directorio destino 

upgrade_step4_page_errfound = Incapaz de copiar archivos de la fuente. Por favor copie manualmente las imagenes de los productos y las categorias desde su antiguo sitio creloaded al directorio images/products/originals de loaded7

upgrade_step5_page_title = Parametros de la Tienda
upgrade_step5_page_desc = Here you can define the name of your online store, and the contact information for the store owner.  The administrator username and password are used to log into the protected administration tool section. 
                                                                                                                              
upgrade_step6_page_title = Servidor Web                                                                                            
upgrade_step6_page_desc = The web server takes care of serving the pages of the online store to the visitors and customers. The web server parameters make sure the links to the pages point to the correct location. Temporary files such as session data and cache files are stored in the work directory. It is important that this directory is located outside the web server root directory and is protected from public access. 

upgrade_step7_page_title = ¡Finalizado!
upgrade_step7_page_desc = Congratulations on installing and configuring Loaded Commerce as your online store solution! We hope you all the best with your online store and welcome you to join and participate in our community.<br /><br /><span style="float:right;">- The Loaded Commerce Team</span>

error_configuration_file_not_writeable = The webserver does not seem to be able to write the online store parameters to its configuration file due to file permission problems.  The configuration file is located at: %s
error_configuration_file_alternate_method = Alternatively you can copy the configuration parameters to the configuration file by hand.  This process will attempt to update the configuration file automatically at the end of the installation.
error_javascript_disabled = Javascript is required for the installation procedure and administration of this installation. Please enable it on your browser and <a href="index.php">re-run the installation procedure</a>.
