<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $nombre
 * @property string|null $ruc_cedula
 * @property string|null $telefono
 * @property string|null $direccion
 * @property string|null $correo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereRucCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cliente whereUpdatedAt($value)
 */
	class Cliente extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credencial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credencial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credencial query()
 */
	class Credencial extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $cliente_id
 * @property string $tipo
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $ubicacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cliente $cliente
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Credencial> $credenciales
 * @property-read int|null $credenciales_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereClienteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereMarca($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereModelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereUbicacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dispositivo whereUpdatedAt($value)
 */
	class Dispositivo extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

