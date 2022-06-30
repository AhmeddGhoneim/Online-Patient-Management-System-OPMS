<?php
namespace  Modules\Admin\repositories;

use Modules\Admin\Entities\Appointment;

class AppointmentRepository {

    public function getAll(){
        
        return Appointment::all();
 
        
     }

}