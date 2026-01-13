<?php

// Client/contract related keys extracted from resources/lang/eng/email.php (Anagami Finance View).
// Merge into the host application's file; do not overwrite it.

return array (
  'newUser' => 
  array (
    'clientSignupMessage' => 'Your account has been approved successfully.',
  ),
  'newClientTask' => 
  array (
    'subject' => 'New task generated',
    'content' => 'A new task has been created in project',
  ),
  'payment' => 
  array (
    'clientsubject' => 'Payment Success',
    'clientName' => 'Client name',
    'clientEmail' => 'Client email',
  ),
  'contractSign' => 
  array (
    'subject' => 'Contract Signed',
    'text' => ':contract (contract) is signed by :client.',
  ),
  'newContract' => 
  array (
    'subject' => 'New contract created',
    'text' => 'A new contract has been created.',
  ),
);
