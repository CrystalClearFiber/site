<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
                'rule' => ['minLength', 10],
                'message' => 'A name is required'
            ])->add('email', 'format', [
                'rule' => 'email',
                'message' => 'A valid email address is required',
            ]);
    }

    protected function _execute(array $data)
    {
        // Send an email.
        Email::configTransport('amazon', [
            'host' => 'email-smtp.us-east-1.amazonaws.com',
            'port' => 587,
            'username' => 'AKIAJARRU5LPFHEQHKPQ',
            'password' => 'AmNFFJsVG8vQGHqlXgy9nMYj9eAx2ubZ/Ghb84FVm7PC',
            'className' => 'Smtp',
            'tls' => true
        ]);

        $email = new Email('default');
        $email->from(['me@example.com' => 'My Site'])
            ->to('zach@crystalclearfiber.com')
            ->subject('About')
            ->send('My message');       
        return true;
    }

    public function setErrors($errors)
    {
    $this->_errors = $errors;
    }
}

?>
