<?php 

namespace DouglasMariz\ValidadorCpfCnpj;

use Illuminate\Support\ServiceProvider;
use DouglasMariz\ValidadorCpfCnpj\Validation\CpfCnpjValidation;

class CpfCnpjServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->validator->resolver(function($translator, $data, $rules, $messages, $customAttributes)
		{
		    return new CpfCnpjValidation($translator, $data, $rules, $messages, $customAttributes);
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
