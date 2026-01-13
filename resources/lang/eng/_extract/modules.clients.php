<?php

// Client/contract related keys extracted from resources/lang/eng/modules.php (Anagami Finance View).
// Merge into the host application's file; do not overwrite it.

return array (
  'dashboard' => 
  array (
    'totalClients' => 'Total Clients',
    'newClients' => 'New Clients',
    'pendingClientIssues' => 'Pending Issues',
    'totalConvertedClient' => 'Total Client Convert',
    'clientFeedback' => 'Client Feedback',
    'totalActiveClients' => 'Active Clients',
    'totalContractsSigned' => 'Contracts Signed',
    'totalContractsGenerated' => 'Contracts Generated',
    'latestClient' => 'Latest Clients',
    'clientWiseEarnings' => 'Client Wise Earnings',
    'clientWiseTimelogs' => 'Client Wise Timelogs',
    'topClients' => 'Top Clients',
    'earningsByClient' => 'Earnings By Client',
    'contractDate' => 'Contract Date',
  ),
  'client' => 
  array (
    'createNote' => 'Add Note',
    'noteTitle' => 'Note Title',
    'noteType' => 'Note Type',
    'noteDetail' => 'Note Detail',
    'visibleToClient' => 'Visible to client',
    'askToReenterPassword' => 'Ask to re-enter password',
    'createTitle' => 'Add Client Info',
    'companyDetails' => 'Company Details',
    'companyName' => 'Company Name',
    'website' => 'Official Website',
    'address' => 'Address',
    'clientDetails' => 'Client Details',
    'clientBasicDetails' => 'Client basic details',
    'clientOtherDetails' => 'Other Details',
    'clientName' => 'Client Name',
    'clientEmail' => 'Client Email',
    'clientPhone' => 'Client Phone',
    'emailNote' => 'Client will login using this email and email notifications will be sent to this email.',
    'password' => 'Password',
    'passwordNote' => 'Client will login using this password.',
    'passwordUpdateNote' => 'Leave blank to keep the current password.',
    'mobile' => 'Mobile',
    'updateTitle' => 'Update Client Info',
    'addNewClient' => 'Add new client',
    'viewDetails' => 'View Details',
    'projectName' => 'Project Name',
    'startedOn' => 'Started On',
    'deadline' => 'Deadline',
    'generateRandomPassword' => 'Generate random password',
    'offline' => 'Offline',
    'online' => 'Online',
    'all' => 'All',
    'sendCredentials' => 'Send Credentials',
    'sendCredentialsMessage' => 'Do you want to send the credentials to the client by email?',
    'assignProject' => 'Assign Project',
    'cell' => 'Cell',
    'officePhoneNumber' => 'Office phone number',
    'addedOn' => 'Added On',
    'clientCategory' => 'Client Category',
    'clientSubCategory' => 'Client sub category',
    'projectSubCategory' => 'Project sub category',
    'profileInfo' => 'Profile Info',
    'clientCanLogin' => 'Login Allowed?',
    'salutation' => 'Salutation',
    'productName' => 'Product Name',
  ),
  'employees' => 
  array (
    'contractEndDate' => 'Contract end date',
    'on_contract' => 'On Contract',
    'activities' => 
    array (
      'client-created' => 'Client is created',
      'client-updated' => 'Client is updated',
      'client-deleted' => 'Client is deleted',
      'contract-created' => 'Contract is created',
      'contract-updated' => 'Contract is updated',
      'contract-deleted' => 'Contract is deleted',
    ),
  ),
  'projects' => 
  array (
    'selectClient' => 'Select Client',
    'clientFeedback' => 'Client Feedback',
    'clientViewTask' => 'Client can manage tasks of this project',
    'clientTaskNotification' => 'Send task notification to client',
    'clientInfo' => 'Client Info',
    'clientMiroAccess' => 'Client can access Miro ',
    'projectClient' => 'Project client details ',
    'projectDoNotHaveClient' => 'This project does not contain any client',
  ),
  'tasks' => 
  array (
    'sectionVisibleClient' => 'Sections visible to client',
  ),
  'notices' => 
  array (
    'toClients' => 'To Clients',
  ),
  'knowledgeBase' => 
  array (
    'toClients' => 'For Clients',
  ),
  'accountSettings' => 
  array (
    'allowClientSignup' => 'Allow client signup',
    'allowClientSignupPopUp' => 'Allowing it will show the sign up button on the login page for the clients to get themselves register',
    'needClientSignupApprovalPopUp' => 'If you want a newly registered client should be logged in to the system only after it gets approved by the admin then enable this. Disabling it means the client can logging without approval',
    'needClientSignupApproval' => 'Need admin approval after client signup',
  ),
  'moduleSettings' => 
  array (
    'clientModuleTitle' => 'Client Module Title',
    'clientSubTitle' => 'Select the modules which client can access.',
  ),
  'messages' => 
  array (
    'allowClientEmployeeChat' => 'Allow chat between client and employees?',
    'allowClientAdminChat' => 'Allow chat between client and admin?',
    'allowClientProjectEmployeeChat' => 'Only project members can chat with client',
  ),
  'themeSettings' => 
  array (
    'clientPanelTheme' => 'Client panel theme',
  ),
  'estimates' => 
  array (
    'clientsignature' => 'Client Signature',
  ),
  'paystack' => 
  array (
    'client_name' => 'Name',
    'client_email' => 'Email',
  ),
  'flutterwave' => 
  array (
    'client_name' => 'Name',
    'client_email' => 'Email',
    'client_phone' => 'Phone',
  ),
  'mollie' => 
  array (
    'client_name' => 'Name',
    'client_email' => 'Email',
  ),
  'payfast' => 
  array (
    'client_name' => 'Name',
    'client_email' => 'Email',
  ),
  'invoiceSettings' => 
  array (
    'contractPrefix' => 'Contract Prefix',
    'contractDigit' => 'Contract number digits',
    'contractLookLike' => 'Contract number example',
    'contractNumberSeparator' => 'Contract number separator',
  ),
  'lead' => 
  array (
    'clientName' => 'Lead Name',
    'clientEmail' => 'Lead Email',
    'client' => 'Client',
    'changeToClient' => 'Change to client',
    'convertedClient' => 'Converted into client',
  ),
  'projectTemplate' => 
  array (
    'selectClient' => 'Select client',
    'clientFeedback' => 'Client Feedback',
    'clientViewTask' => 'Client can manage tasks of this project',
    'clientTaskNotification' => 'Send task notification to the client?',
  ),
  'module' => 
  array (
    'clients' => 'Clients',
    'contracts' => 'Contracts',
  ),
  'contracts' => 
  array (
    'createContract' => 'Create contract',
    'createContractType' => 'Create contract type',
    'contractType' => 'Contract Type',
    'summery' => 'Summary',
    'discussion' => 'Discussion',
    'addComment' => 'Add comment',
    'contractValue' => 'Contract Value',
    'contractNumber' => 'Contract Number',
    'endDate' => 'End Date',
    'totalContracts' => 'Total Contracts',
    'subject' => 'Subject',
    'description' => 'Description',
    'expired' => 'Expired',
    'active' => 'Active',
    'aboutToExpire' => 'About to expire',
    'manageContractType' => 'Manage contract type',
    'addContractType' => 'Add contract type',
    'notes' => 'Notes',
    'editDiscussion' => 'Edit discussion',
    'discussionUpdated' => 'Discussion successfully updated.',
    'discussionDeleted' => 'Discussion successfully deleted.',
    'discussionAdded' => 'Discussion successfully added.',
    'renewContract' => 'Renew contract',
    'renewedThisContract' => 'renewed this contract',
    'newStartDate' => 'New start date',
    'newEndDate' => 'New end date',
    'newAmount' => 'New contract value',
    'contractRenewalHistory' => 'Contract renewal history',
    'keepSignature' => 'Keep customer signature',
    'contractName' => 'Contract Name',
    'alternateAddress' => 'Alternate Address',
    'companyLogo' => 'Company Logo',
    'noValue' => 'No Value',
    'noEndDate' => 'No end date',
    'streetAddress1' => 'Street Address 1',
    'streetAddress2' => 'Street Address 2',
    'setZero' => 'Set value to 0 if the contract does not have cost.',
  ),
  'clients' => 
  array (
    'addShippingAddress' => 'Add shipping address',
    'shippingAddress' => 'Shipping Address',
  ),
  'recurringInvoice' => 
  array (
    'allowToClient' => 'Client can stop recurring.',
  ),
  'leads' => 
  array (
    'client_email' => 'Email',
    'client_name' => 'Name',
  ),
  'emailNotification' => 
  array (
    'new-client-task' => 'New client task',
    'task-update-client' => 'Task update client',
    'contract-signed' => 'Contract Signed',
    'task-completed-client' => 'Task completed client',
  ),
  'googleCalendar' => 
  array (
    'clientId' => 'Client ID',
    'clientSecret' => 'Client Secret',
  ),
  'deal' => 
  array (
    'createClient' => 'Auto convert lead to client when deal stage is set to \'Win\'',
  ),
);
