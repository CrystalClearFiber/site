<?php
// In a controller
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;
use Cake\Mailer\Email;

class ContactFormController extends AppController
{
    public function index()
    {
        $contact = new ContactForm();
        $contact->setErrors(["email" => ["_required" => "Your email is required"]]);
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('We will get back to you soon.');
            } else {
                echo $this -> request -> data['body'];
                //$this->Flash->error('There was a problem submitting your form.');
            }
        }

        if ($this->request->is('get')) {
            //Values from the User Model e.g.
            $this->request->data['name'] = 'John Doe';
            $this->request->data['email'] = 'john.doe@example.com';
        }

        $this->set('contact', $contact);
    }
}
?>
