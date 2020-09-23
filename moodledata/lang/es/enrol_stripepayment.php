<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_stripepayment', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_stripepayment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtogroup'] = 'Añadir al grupo';
$string['addtogroup_help'] = 'Si selecciona un grupo, cuando un usuario complete el proceso de pago se añadirá a este grupo.';
$string['assignrole'] = 'Asignar rol';
$string['assignrole_help'] = 'Si selecciona un rol, cuando un usuario complete el proceso de pago se le asignará este rol.';
$string['billingaddress'] = 'Exigir a los usuarios que introduzcan su dirección de facturación';
$string['billingaddress_desc'] = 'Esto establece si al pagar con Stripe se debe solicitar al usuario que introduzca su domicilio de facturación. Está desactivado de forma predeterminada, pero es una buena idea activarlo.';
$string['btntext'] = 'Pagar Ahora';
$string['canntenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['charge_description1'] = 'crear cliente para recibo de correo electrónico';
$string['charge_description2'] = 'Cargo por coste de inscripción al curso.';
$string['cost'] = 'Coste de inscripción';
$string['costerror'] = 'El coste de inscripción no es numérico';
$string['costorkey'] = 'Por favor, elija uno de los siguientes métodos de inscripción.';
$string['currency'] = 'Moneda';
$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['customwelcomemessage_help'] = 'Si introduce algún texto aquí, éste se mostrará en lugar del texto estándar ("Este curso requiere un pago para ingresar") en la página de opciones de inscripción que los alumnos ven cuando intentan acceder a un curso en el que no están inscritos. Si deja este campo en blanco, se usará el texto estándar.';
$string['defaultrole'] = 'Asignación de roles por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que se debe asignar a los usuarios durante las inscripciones de Stripe';
$string['enrolenddate'] = 'Fecha de finalización';
$string['enrolenddate_help'] = 'Si está habilitado, los usuarios pueden inscribirse hasta esta fecha solamente.';
$string['enrolenddaterror'] = 'La fecha de finalización de la inscripción no puede ser anterior a la fecha de inicio';
$string['enrolmentnew'] = 'Nueva inscripción';
$string['enrolmentnewuser'] = 'Inscripción de nuevo usuario';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Tiempo predeterminado de validez para la inscripción. Si se establece en cero, la duración de la inscripción será ilimitada de forma predeterminada.';
$string['enrolperiod_help'] = 'La cantidad de tiempo que la inscripción es válida, comenzando desde el momento en que el usuario se inscribe. Si está deshabilitado, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si está habilitado, los usuarios pueden inscribirse a partir de esta fecha unicamente.';
$string['expiredaction'] = 'Acción al vencer la inscripción';
$string['expiredaction_help'] = 'Seleccione la acción a llevar a cabo cuando caduque la inscripción del usuario. Tenga en cuenta que algunos datos de usuario y configuraciones se eliminan del curso durante la cancelación del mismo.';
$string['mailadmins'] = 'Notificar administrador';
$string['mailstudents'] = 'Notificar estudiantes';
$string['mailteachers'] = 'Notificar profesores';
$string['maxenrolled'] = 'Cantidad máxima de inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que pueden inscribirse usando Stripe. Introduzca 0 (cero) para inscripciones ilimitadas.';
$string['maxenrolledreached'] = 'Ha alcanzado el número máximo de usuarios permitidos para realizar el pago con Stripe.';
$string['messageprovider:stripe_enrolment'] = 'Mensajes de inscripción';
$string['messageprovider:stripepayment_enrolment'] = 'Proveedor de mensajes';
$string['nocost'] = '¡No hay ningún coste asociado con la inscripción en este curso!';
$string['paymentthanks'] = 'Muchas gracias por su pago';
$string['pluginname'] = 'Pago con Stripe';
$string['pluginname_desc'] = 'El módulo Stripe le permite configurar cursos de pago. Si el coste de cualquier curso es cero, no se les solicitará a los estudiantes un pago por la inscripción. Hay un coste predeterminado que aplica para todo el sitio y una configuración de curso que permite establecer el coste para cada curso individualmente. El coste del curso anula el coste del predeterminado del sitio.';
$string['publishablekey'] = 'Clave pública de Stripe';
$string['publishablekey_desc'] = 'La clave pública de la API de su cuenta Stripe';
$string['secretkey'] = 'Clave privada de Stripe';
$string['secretkey_desc'] = 'La clave privada de la API de su cuenta Stripe';
$string['sendpaymentbutton'] = 'Enviar el pago a través de Stripe';
$string['status'] = 'Permitir inscripciones usando Stripe';
$string['status_desc'] = 'Permitir que los usuarios utilicen Stripe para inscribirse en un curso de forma predeterminada.';
$string['stripeaccepted'] = 'Pagos de Stripe aceptados';
$string['stripe:config'] = 'Configurar instancias de registro Stripe';
$string['stripe:manage'] = 'Administrar usuarios inscritos';
$string['stripepayment:config'] = 'Configurar stripepayment';
$string['stripepayment:manage'] = 'Administrar stripepayment';
$string['stripepayment:unenrol'] = 'Anular inscripción Stripe';
$string['stripepayment:unenrolself'] = 'Darse de baja de stripepayment';
$string['stripe_sorry'] = 'Lo sentimos, no se puede utilizar el script de esa forma.';
$string['stripe:unenrol'] = 'Desinscribir usuarios del curso';
$string['stripe:unenrolself'] = 'Desinscribirme del curso';
$string['unenrolselfconfirm'] = '¿Realmente quieres darte de baja del curso "{$a}"?';
$string['validatezipcode'] = 'Validar código postal de facturación';
$string['validatezipcode_desc'] = 'Establece si la dirección de facturación debe verificarse como parte del procesamiento del pago. Se recomienda encarecidamente que esta opción esté activada para prevenir el fraude.';
