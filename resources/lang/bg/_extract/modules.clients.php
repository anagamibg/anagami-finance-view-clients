<?php

// Client/contract related keys extracted from resources/lang/bg/modules.php (Anagami Finance View).
// Merge into the host application's file; do not overwrite it.

return array (
  'dashboard' => 
  array (
    'totalClients' => 'Общо клиенти',
    'newClients' => 'Нови клиенти',
    'pendingClientIssues' => 'Висящи проблеми',
    'totalConvertedClient' => 'Общо преобразувани клиенти',
    'clientFeedback' => 'Отзиви на клиентите',
    'totalActiveClients' => 'Активни клиенти',
    'totalContractsSigned' => 'Подписани договори',
    'totalContractsGenerated' => 'Генерирани договори',
    'latestClient' => 'Последни клиенти',
    'clientWiseEarnings' => 'Приходи по клиенти',
    'clientWiseTimelogs' => 'Отработено време по клиенти',
    'topClients' => 'Водещи клиенти',
    'earningsByClient' => 'Приходи по клиент',
    'contractDate' => 'Дата на договора',
  ),
  'client' => 
  array (
    'createNote' => 'Добави бележка',
    'noteTitle' => 'Заглавие на бележката',
    'noteType' => 'Тип бележка',
    'noteDetail' => 'Подробности за бележката',
    'visibleToClient' => 'Видимо за клиента',
    'askToReenterPassword' => 'Поискай повторно въвеждане на парола',
    'createTitle' => 'Добавяне на данни за клиент',
    'companyDetails' => 'Данни за компанията',
    'companyName' => 'Име на фирмата',
    'website' => 'Официален уебсайт',
    'address' => 'Адрес',
    'clientDetails' => 'Данни за клиента',
    'clientBasicDetails' => 'Основни данни за клиента',
    'clientOtherDetails' => 'Други данни',
    'clientName' => 'Име на клиента',
    'clientEmail' => 'Имейл на клиента',
    'clientPhone' => 'Телефон на клиента',
    'emailNote' => 'Клиентът ще влезе с този имейл и на този имейл ще се изпращат известия по имейл.',
    'password' => 'Парола',
    'passwordNote' => 'Клиентът ще влезе с тази парола.',
    'passwordUpdateNote' => 'Оставете празно, за да запазите текущата парола.',
    'mobile' => 'Мобилен телефон',
    'updateTitle' => 'Редакция на данни за клиент',
    'addNewClient' => 'Добави нов клиент',
    'viewDetails' => 'Виж подробности',
    'projectName' => 'Име на проекта',
    'startedOn' => 'Започнат на',
    'deadline' => 'Краен срок',
    'generateRandomPassword' => 'Генерирай случайна парола',
    'offline' => 'Офлайн',
    'online' => 'Онлайн',
    'all' => 'Всички',
    'sendCredentials' => 'Изпрати данни за вход',
    'sendCredentialsMessage' => 'Желаете ли да изпратите данните за вход на клиента по имейл?',
    'assignProject' => 'Възложи проект',
    'cell' => 'Мобилен',
    'officePhoneNumber' => 'Служебен телефон',
    'addedOn' => 'Добавен на',
    'clientCategory' => 'Категория клиент',
    'clientSubCategory' => 'Подкатегория на клиента',
    'projectSubCategory' => 'Подкатегория на проекта',
    'profileInfo' => 'Профилна информация',
    'clientCanLogin' => 'Разрешен вход?',
    'salutation' => 'Обръщение',
    'productName' => 'Име на продукта',
  ),
  'employees' => 
  array (
    'contractEndDate' => 'Край на договора',
    'on_contract' => 'На договор',
    'activities' => 
    array (
      'client-created' => 'Клиентът е създаден',
      'client-updated' => 'Клиентът е актуализиран',
      'client-deleted' => 'Клиентът е изтрит',
      'contract-created' => 'Договорът е създаден',
      'contract-updated' => 'Договорът е актуализиран',
      'contract-deleted' => 'Договорът е изтрит',
    ),
  ),
  'projects' => 
  array (
    'selectClient' => 'Избери клиент',
    'clientFeedback' => 'Отзиви на клиентите',
    'clientViewTask' => 'Клиентът може да управлява задачите на този проект',
    'clientTaskNotification' => 'Изпращай на клиента известие за задача',
    'clientInfo' => 'Информация за клиента',
    'clientMiroAccess' => 'Клиентът има достъп до Miro',
    'projectClient' => 'Данни за клиента на проекта',
    'projectDoNotHaveClient' => 'Този проект няма клиент',
  ),
  'tasks' => 
  array (
    'sectionVisibleClient' => 'Секции, видими за клиента',
  ),
  'notices' => 
  array (
    'toClients' => 'За клиентите',
  ),
  'knowledgeBase' => 
  array (
    'toClients' => 'За клиенти',
  ),
  'accountSettings' => 
  array (
    'allowClientSignup' => 'Разреши регистрация на клиенти',
    'allowClientSignupPopUp' => 'Ако е разрешено, на страницата за вход ще се показва бутон за регистрация на клиенти',
    'needClientSignupApprovalPopUp' => 'Включете, ако новорегистриран клиент трябва да може да влезе в системата само след одобрение от администратор. Ако е изключено, клиентът може да влиза без одобрение',
    'needClientSignupApproval' => 'Изисквай одобрение от администратор след регистрация на клиент',
  ),
  'moduleSettings' => 
  array (
    'clientModuleTitle' => 'Заглавие на модула за клиенти',
    'clientSubTitle' => 'Изберете модулите, до които клиентът има достъп.',
  ),
  'messages' => 
  array (
    'allowClientEmployeeChat' => 'Да се разреши ли чат между клиент и служители?',
    'allowClientAdminChat' => 'Да се разреши ли чат между клиент и администратор?',
    'allowClientProjectEmployeeChat' => 'Само членовете на проекта могат да разговарят с клиента',
  ),
  'themeSettings' => 
  array (
    'clientPanelTheme' => 'Тема на клиентския панел',
  ),
  'estimates' => 
  array (
    'clientsignature' => 'Подпис на клиента',
  ),
  'paystack' => 
  array (
    'client_name' => 'Име',
    'client_email' => 'Имейл',
  ),
  'flutterwave' => 
  array (
    'client_name' => 'Име',
    'client_email' => 'Имейл',
    'client_phone' => 'Телефон',
  ),
  'mollie' => 
  array (
    'client_name' => 'Име',
    'client_email' => 'Имейл',
  ),
  'payfast' => 
  array (
    'client_name' => 'Име',
    'client_email' => 'Имейл',
  ),
  'invoiceSettings' => 
  array (
    'contractPrefix' => 'Префикс на договорите',
    'contractDigit' => 'Брой цифри в номера на договора',
    'contractLookLike' => 'Пример за номер на договор',
    'contractNumberSeparator' => 'Разделител в номера на договор',
  ),
  'lead' => 
  array (
    'clientName' => 'Име на потенциалния клиент',
    'clientEmail' => 'Имейл на потенциалния клиент',
    'client' => 'Клиент',
    'changeToClient' => 'Преобразувай в клиент',
    'convertedClient' => 'Преобразуван в клиент',
  ),
  'projectTemplate' => 
  array (
    'selectClient' => 'Избери клиент',
    'clientFeedback' => 'Отзив на клиента',
    'clientViewTask' => 'Клиентът може да управлява задачите по този проект',
    'clientTaskNotification' => 'Да се изпраща ли известие до клиента за задачите?',
  ),
  'module' => 
  array (
    'clients' => 'Клиенти',
    'contracts' => 'Договори',
  ),
  'contracts' => 
  array (
    'createContract' => 'Създай договор',
    'createContractType' => 'Създай вид договор',
    'contractType' => 'Вид договор',
    'summery' => 'Резюме',
    'discussion' => 'Дискусия',
    'addComment' => 'Добави коментар',
    'contractValue' => 'Стойност на договора',
    'contractNumber' => 'Номер на договора',
    'endDate' => 'Крайна дата',
    'totalContracts' => 'Общо договори',
    'subject' => 'Предмет',
    'description' => 'Описание',
    'expired' => 'Изтекъл',
    'active' => 'Активен',
    'aboutToExpire' => 'Наближава изтичане',
    'manageContractType' => 'Управление на видовете договори',
    'addContractType' => 'Добави вид договор',
    'notes' => 'Бележки',
    'editDiscussion' => 'Редактирай дискусията',
    'discussionUpdated' => 'Дискусията беше обновена успешно.',
    'discussionDeleted' => 'Дискусията беше изтрита успешно.',
    'discussionAdded' => 'Дискусията беше добавена успешно.',
    'renewContract' => 'Поднови договора',
    'renewedThisContract' => 'поднови този договор',
    'newStartDate' => 'Нова начална дата',
    'newEndDate' => 'Нова крайна дата',
    'newAmount' => 'Нова стойност на договора',
    'contractRenewalHistory' => 'История на подновяванията на договора',
    'keepSignature' => 'Запази подписа на клиента',
    'contractName' => 'Име на договора',
    'alternateAddress' => 'Алтернативен адрес',
    'companyLogo' => 'Лого на фирмата',
    'noValue' => 'Без стойност',
    'noEndDate' => 'Без крайна дата',
    'streetAddress1' => 'Адрес, ред 1',
    'streetAddress2' => 'Адрес, ред 2',
    'setZero' => 'Задайте стойност 0, ако договорът не е възмезден.',
  ),
  'clients' => 
  array (
    'addShippingAddress' => 'Добави адрес за доставка',
    'shippingAddress' => 'Адрес за доставка',
  ),
  'recurringInvoice' => 
  array (
    'allowToClient' => 'Клиентът може да спре периодичността.',
  ),
  'leads' => 
  array (
    'client_email' => 'Имейл',
    'client_name' => 'Име',
  ),
  'emailNotification' => 
  array (
    'new-client-task' => 'Нова задача на клиент',
    'task-update-client' => 'Обновяване на задача на клиент',
    'contract-signed' => 'Подписан договор',
    'task-completed-client' => 'Изпълнена задача на клиент',
  ),
  'googleCalendar' => 
  array (
    'clientId' => 'Идентификатор на клиента',
    'clientSecret' => 'Тайна на клиента',
  ),
  'deal' => 
  array (
    'createClient' => 'Автоматично преобразуване на потенциалния клиент в клиент, когато етапът на сделката е „Win“',
  ),
);
