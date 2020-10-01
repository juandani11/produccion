<?php


Route::get('/', 'TestController@welcome');

Route::view('/about-us', 'about-us');

Route::get('test', function () {
    \Log::info('aqui podemos colocar y concatenar todos los movimientos que realiza un usuario, a las 11:30am');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

	//Gestión Administrativa
	Route::get('/gestion-administrativa', 'HomeController@ges_adm')->name('ges_adm');
	//Nómina
	Route::get('/nomina', 'HomeController@nomina')->name('nomina');
	//Invenatario
	Route::get('/inventario', 'HomeController@inventario')->name('inventario');

	//Bitácora
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('bitacora')
		->middleware('can:logs');

	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('can:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('can:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('can:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('can:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('can:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('can:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('can:roles.edit');
	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('can:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('can:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('can:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('can:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('can:users.edit');
	//Products
	Route::post('products/store', 'ProductController@store')->name('products.store')
		->middleware('can:products.create');

	Route::get('products', 'ProductController@index')->name('products.index')
		->middleware('can:products.index');

	Route::get('products/create', 'ProductController@create')->name('products.create')
		->middleware('can:products.create');

	Route::put('products/{product}', 'ProductController@update')->name('products.update')
		->middleware('can:products.edit');

	Route::get('products/{product}', 'ProductController@show')->name('products.show')
		->middleware('can:products.show');

	Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
		->middleware('can:products.destroy');

	Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
		->middleware('can:products.edit');


	//Sucursal
	Route::post('sucursales/store', 'SucursalController@store')->name('sucursales.store')
		->middleware('can:sucursales.create');

	Route::get('sucursales', 'SucursalController@index')->name('sucursales.index')
		->middleware('can:sucursales.index');
	
	Route::get('sucursales/create', 'SucursalController@create')->name('sucursales.create')
		->middleware('can:sucursales.create');

	Route::put('sucursales/{id_sucursal}', 'SucursalController@update')->name('sucursales.update')
		->middleware('can:sucursales.edit');

	Route::get('sucursales/{id_sucursal}', 'SucursalController@show')->name('sucursales.show')
		->middleware('can:sucursales.show');

	Route::delete('sucursales/{id_sucursal}', 'SucursalController@destroy')->name('sucursales.destroy')
		->middleware('can:sucursales.destroy');

	Route::get('sucursales/{id_sucursal}/edit', 'SucursalController@edit')->name('sucursales.edit')
		->middleware('can:sucursales.edit');

	//Departamento
	Route::post('departamentos/store', 'DepartamentoController@store')->name('departamentos.store')
		->middleware('can:departamentos.create');

	Route::get('departamentos', 'DepartamentoController@index')->name('departamentos.index')
		->middleware('can:departamentos.index');
	
	Route::get('departamentos/create', 'DepartamentoController@create')->name('departamentos.create')
		->middleware('can:departamentos.create');

	Route::put('departamentos/{id_departamento}', 'DepartamentoController@update')->name('departamentos.update')
		->middleware('can:departamentos.edit');

	Route::get('departamentos/{id_departamento}', 'DepartamentoController@show')->name('departamentos.show')
		->middleware('can:departamentos.show');

	Route::delete('departamentos/{id_departamento}', 'DepartamentoController@destroy')->name('departamentos.destroy')
		->middleware('can:departamentos.destroy');

	Route::get('departamentos/{id_departamento}/edit', 'DepartamentoController@edit')->name('departamentos.edit')
		->middleware('can:departamentos.edit');
		
	//Area
	Route::post('areas/store', 'AreaController@store')->name('areas.store')
		->middleware('can:areas.create');

	Route::get('areas', 'AreaController@index')->name('areas.index')
		->middleware('can:areas.index');
	
	Route::get('areas/create', 'AreaController@create')->name('areas.create')
		->middleware('can:areas.create');

	Route::put('areas/{id_area}', 'AreaController@update')->name('areas.update')
		->middleware('can:areas.edit');

	Route::get('areas/{id_area}', 'AreaController@show')->name('areas.show')
		->middleware('can:areas.show');

	Route::delete('areas/{id_area}', 'AreaController@destroy')->name('areas.destroy')
		->middleware('can:areas.destroy');

	Route::get('areas/{id_area}/edit', 'AreaController@edit')->name('areas.edit')
		->middleware('can:areas.edit');
	
	//Cargo
	Route::post('cargos/store', 'CargoController@store')->name('cargos.store')
		->middleware('can:cargos.create');

	Route::get('cargos', 'CargoController@index')->name('cargos.index')
		->middleware('can:cargos.index');
	
	Route::get('cargos/create', 'CargoController@create')->name('cargos.create')
		->middleware('can:cargos.create');

	Route::put('cargos/{id_cargo}', 'CargoController@update')->name('cargos.update')
		->middleware('can:cargos.edit');

	Route::get('cargos/{id_cargo}', 'CargoController@show')->name('cargos.show')
		->middleware('can:cargos.show');

	Route::delete('cargos/{id_cargo}', 'CargoController@destroy')->name('cargos.destroy')
		->middleware('can:cargos.destroy');

	Route::get('cargos/{id_cargo}/edit', 'CargoController@edit')->name('cargos.edit')
		->middleware('can:cargos.edit');

	//Empleado
	Route::post('empleados/store', 'EmpleadoController@store')->name('empleados.store')
		->middleware('can:empleados.create');

	Route::get('empleados', 'EmpleadoController@index')->name('empleados.index')
		->middleware('can:empleados.index');
	
	Route::get('empleados/create', 'EmpleadoController@create')->name('empleados.create')
		->middleware('can:empleados.create');

	Route::put('empleados/{id_empleado}', 'EmpleadoController@update')->name('empleados.update')
		->middleware('can:empleados.edit');

	Route::get('empleados/{id_empleado}', 'EmpleadoController@show')->name('empleados.show')
		->middleware('can:empleados.show');

	Route::delete('empleados/{id_empleado}', 'EmpleadoController@destroy')->name('empleados.destroy')
		->middleware('can:empleados.destroy');

	Route::get('empleados/{id_empleado}/edit', 'EmpleadoController@edit')->name('empleados.edit')
		->middleware('can:empleados.edit');

    //proveedor
    Route::get('inventario/proveedor', 'ProveedorController@index')->name('proveedor.index')
        ->middleware('can:proveedor.index');

    Route::get('proveedor/{proveedor}', 'ProveedorController@show')->name('proveedor.show')
        ->middleware('can:proveedor.show');

    Route::get('proveedor/{proveedor}/edit', 'ProveedorController@edit')->name('proveedor.edit')
        ->middleware('can:proveedor.edit');

    Route::delete('proveedor/{proveedor}', 'ProveedorController@destroy')->name('proveedor.destroy')
        ->middleware('can:proveedor.destroy');

    Route::put('proveedor/{proveedor}', 'ProveedorController@update')->name('proveedor.update')
        ->middleware('can:proveedor.edit');

    Route::get('inventario/proveedor/create', 'ProveedorController@create')->name('proveedor.create')
        ->middleware('can:proveedor.create');

    Route::post('proveedor/store', 'ProveedorController@store')->name('proveedor.store')
        ->middleware('can:proveedor.create');

    //Materia Prima
    Route::get('inventario/materia_prima', 'MateriaPrimaController@index')->name('materia_prima.index')
        ->middleware('can:materia_prima.index');

    Route::get('materia_prima/{materia_prima}', 'MateriaPrimaController@show')->name('materia_prima.show')
        ->middleware('can:materia_prima.show');

    Route::get('materia_prima/{materia_prima}/edit', 'MateriaPrimaController@edit')->name('materia_prima.edit')
        ->middleware('can:materia_prima.edit');

    Route::delete('materia_prima/{materia_prima}', 'MateriaPrimaController@destroy')->name('materia_prima.destroy')
        ->middleware('can:materia_prima.destroy');

    Route::put('materia_prima/{materia_prima}', 'MateriaPrimaController@update')->name('materia_prima.update')
        ->middleware('can:materia_prima.edit');

    Route::get('inventario/materia_prima/create', 'MateriaPrimaController@create')->name('materia_prima.create')
        ->middleware('can:materia_prima.create');

    Route::post('materia_prima/store', 'MateriaPrimaController@store')->name('materia_prima.store')
        ->middleware('can:materia_prima.create');

    //Articulo
    Route::get('inventario/articulo', 'ArticuloController@index')->name('articulo.index')
        ->middleware('can:articulo.index');

    Route::get('articulo/{articulo}', 'ArticuloController@show')->name('articulo.show')
        ->middleware('can:articulo.show');

    Route::get('articulo/{articulo}/edit', 'ArticuloController@edit')->name('articulo.edit')
        ->middleware('can:articulo.edit');

    Route::delete('articulo/{articulo}', 'ArticuloController@destroy')->name('articulo.destroy')
        ->middleware('can:articulo.destroy');

    Route::put('articulo/{articulo}', 'ArticuloController@update')->name('articulo.update')
        ->middleware('can:articulo.edit');

    Route::get('inventario/articulo/create', 'ArticuloController@create')->name('articulo.create')
        ->middleware('can:articulo.create');

    Route::post('articulo/store', 'ArticuloController@store')->name('articulo.store')
		->middleware('can:articulo.create');
		
	//Almacen
    Route::get('inventario/almacen', 'AlmacenController@index')->name('almacen.index')
        ->middleware('can:almacen.index');

    Route::get('almacen/{almacen}', 'AlmacenController@show')->name('almacen.show')
        ->middleware('can:almacen.show');

    Route::get('almacen/{almacen}/edit', 'AlmacenController@edit')->name('almacen.edit')
        ->middleware('can:almacen.edit');

    Route::delete('almacen/{almacen}', 'AlmacenController@destroy')->name('almacen.destroy')
        ->middleware('can:almacen.destroy');

    Route::put('almacen/{almacen}', 'AlmacenController@update')->name('almacen.update')
        ->middleware('can:almacen.edit');

    Route::get('inventario/almacen/create', 'AlmacenController@create')->name('almacen.create')
        ->middleware('can:almacen.create');

    Route::post('almacen/store', 'AlmacenController@store')->name('almacen.store')
		->middleware('can:almacen.create');
		
	//Inventario
    Route::get('inventario/inventario', 'InventarioController@index')->name('inventario.index')
        ->middleware('can:inventario.index');

    Route::get('inventario/{inventario}', 'InventarioController@show')->name('inventario.show')
        ->middleware('can:inventario.show');

    Route::get('inventario/{inventario}/edit', 'InventarioController@edit')->name('inventario.edit')
        ->middleware('can:inventario.edit');

    Route::delete('inventario/{inventario}', 'InventarioController@destroy')->name('inventario.destroy')
        ->middleware('can:inventario.destroy');

    Route::put('inventario/{inventario}', 'InventarioController@update')->name('inventario.update')
        ->middleware('can:inventario.edit');

    Route::get('inventario/inventario/create', 'InventarioController@create')->name('inventario.create')
        ->middleware('can:inventario.create');

    Route::post('inventario/store', 'InventarioController@store')->name('inventario.store')
        ->middleware('can:inventario.create');


    //Almacen
    Route::get('compra/orden_aprovisionamiento', 'OrdenAprovisionamientoController@index')->name('orden_aprovisionamiento.index')
        ->middleware('can:orden_aprovisionamiento.index');

    Route::get('orden_aprovisionamiento/{orden_aprovisionamiento}', 'OrdenAprovisionamientoController@show')->name('orden_aprovisionamiento.show')
        ->middleware('can:orden_aprovisionamiento.show');

    Route::get('orden_aprovisionamiento/{orden_aprovisionamiento}/edit', 'OrdenAprovisionamientoController@edit')->name('orden_aprovisionamiento.edit')
        ->middleware('can:orden_aprovisionamiento.edit');

    Route::delete('orden_aprovisionamiento/{orden_aprovisionamiento}', 'OrdenAprovisionamientoController@destroy')->name('orden_aprovisionamiento.destroy')
        ->middleware('can:orden_aprovisionamiento.destroy');

    Route::put('orden_aprovisionamiento/{orden_aprovisionamiento}', 'OrdenAprovisionamientoController@update')->name('orden_aprovisionamiento.update')
        ->middleware('can:orden_aprovisionamiento.edit');

    Route::get('compra/orden_aprovisionamiento/create', 'OrdenAprovisionamientoController@create')->name('orden_aprovisionamiento.create')
        ->middleware('can:orden_aprovisionamiento.create');

    Route::post('orden_aprovisionamiento/store', 'OrdenAprovisionamientoController@store')->name('orden_aprovisionamiento.store')
        ->middleware('can:orden_aprovisionamiento.create');

});



