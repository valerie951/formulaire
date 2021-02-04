<?php

// définition tableau d'erreur
$formError = array();

// définition des regexs
$firstnameReg = '/^[\w]+$/';

$lastnameReg = '/^[\w]+$/';

$countryReg = '/^[\w]+$/';

$mailReg = '/[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/';

$phoneReg = '/^0[1-678]([-. ]?[0-9]{2}){4}+$/';

$expReg = '/^[\w]+$/';

$numberPoReg = '/[a-zA-Z_0-9]+$/';

$badgeReg = '/[0-9]+$/';

$codecademyReg = '/[0-9]+$/';

$questionReg ='/^[\w]+$/';

$hackReg = '/^[\w]+$/';

 

// si présence de la valeur du bouton de validation
if (isset($_POST['submit']))
{
    // vérification des champs de saisies

    // firstname
    if (!empty($_POST['firstname']))
    {
        if (preg_match($firstnameReg, $_POST['firstname']))
        {
            $firstname = $_POST['firstname'];
        }
        else
        {
            $formError['firstname'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['firstname'] = 'Vous devez remplir ce champs !!!';
    }
    // lastname
    if (!empty($_POST['lastname']))
    {
        if (preg_match($lastnameReg, $_POST['lastname']))
        {
            $lastname = $_POST['lastname'];
        }
        else
        {
            $formError['lastname'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['lastname'] = 'Vous devez remplir ce champs !!!';
    }
// country
    if (!empty($_POST['country']))
    {
        if (preg_match($countryReg, $_POST['country']))
        {
            $country = $_POST['country'];
        }
        else
        {
            $formError['country'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['country'] = 'Vous devez remplir ce champs !!!';
    }
// mail
    if (!empty($_POST['mail']))
    {
        if (preg_match($mailReg, $_POST['mail']))
        {
            $mail = $_POST['mail'];
        }
        else
        {
            $formError['mail'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['mail'] = 'Vous devez remplir ce champs !!!';
    }
// phone
    if (!empty($_POST['phone']))
    {
        if (preg_match($phoneReg, $_POST['phone']))
        {
            $phone = $_POST['phone'];
        }
        else
        {
            $formError['phone'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['phone'] = 'Vous devez remplir ce champs !!!';
    }

    // experience

    if (!empty($_POST['exp']))
     {
         if (preg_match($expReg, $_POST['exp']))
         {
             $exp = $_POST['exp'];
         }
         else
         {
             $formError['exp'] = 'Erreur de saisie !!';
         }
     }
     else
     {
         $formError['exp'] = 'Vous devez remplir ce champs !!!';
     }

// numberPo
    if (!empty($_POST['numberPo']))
    {
        if (preg_match($numberPoReg, $_POST['numberPo']))
        {
            $numberPo = $_POST['numberPo'];
        }
        else
        {
            $formError['numberPo'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['numberPo'] = 'Vous devez remplir ce champs !!!';
    }
// badge
    if (!empty($_POST['badge']))
    {
        if (preg_match($badgeReg, $_POST['badge']))
        {
            $badge = $_POST['badge'];
        }
        else
        {
            $formError['badge'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['badge'] = 'Vous devez remplir ce champs !!!';
    }

// codeacademy
    if (!empty($_POST['codecademy']))
    {
        if (preg_match($codecademyReg, $_POST['codecademy']))
        {
            $codeacademy = $_POST['codecademy'];
        }
        else
        {
            $formError['codecademy'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['codecademy'] = 'Vous devez remplir ce champs !!!';
    }

// question
    if (!empty($_POST['question']))
    {
        if (preg_match($questionReg, $_POST['question']))
        {
            $question = $_POST['question'];
        }
        else
        {
            $formError['question'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['question'] = 'Vous devez remplir ce champs !!!';
    }

// hack
    if (!empty($_POST['hack']))
    {
        if (preg_match($hackReg, $_POST['hack']))
        {
            $hack = $_POST['hack'];
        }
        else
        {
            $formError['hack'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['hack'] = 'Vous devez remplir ce champs !!!';
    }

     












    

}    



