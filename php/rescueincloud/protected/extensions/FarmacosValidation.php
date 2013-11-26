<?php
class FarmacosValidation extends CValidator
{
    public function validateAttribute($object,$attribute)
    {
        if(!$object->$attribute)
        {
            return $this->addError($object,$attribute,"Campo obligatorio");
        } 
    }      
}
?>