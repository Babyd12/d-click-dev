<?php
 $regex_text_field = "/^[a-zA-Z0-9À-ÿ\s]*$/";
 $regex_date = '/^([0-2][0-9]|3[0-1])-([0-9]|1[0-2])-[0-9]{4}$/';
 $regexEmail = '/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.%-]+\.[a-zA-Z]{2,}$/';
 $regex_phone_sn = '/^7[7-8-6-0-5]+[0-9]{7}$ /';


 #[Assert\Regex("/^(?!\s*$)(?![0-9]+$)(?![^a-zA-Z0-9À-ÿ\s]+$)[a-zA-Z0-9À-ÿ'\s]*$/", message: "La valeur {{ value }}ne peut pas être vide ou composée uniquement d'espaces ou de caractères spéciaux")]
