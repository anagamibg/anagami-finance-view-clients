# Anagami Finance View (AFV) – модул „Клиенти“

Самостоятелно изнесен модул **Клиенти** (`clients`) от **Anagami Finance View (AFV)** – многофирмена (multi-tenant) платформа за управление, обработка и анализ на финансови данни на малки и средни предприятия, изградена на Laravel 12. Репото съдържа всички файлове, свързани с управлението на клиенти и договорите с клиенти, при запазени оригинални относителни пътища, така че съдържанието да може да се копира директно върху Laravel проекта на AFV.

> **Частно / вътрешно ползване.** Репото е частно и е предназначено само за вътрешна употреба в екипа на Anagami. Не се разпространява публично и не е самостоятелно приложение – работи единствено върху кода на основната система (виж „Зависимости“).

## Съдържание

1. [Функционалности](#функционалности)
2. [Структура на папките](#структура-на-папките)
3. [Зависимости от останалата система](#зависимости-от-останалата-система)
4. [Изисквания](#изисквания)
5. [Интеграция](#интеграция)
6. [Скрити менюта през config/databackd.php](#скрити-менюта-през-configdatabackdphp)
7. [Какво не е включено](#какво-не-е-включено)
8. [Забележки](#забележки)

## Функционалности

### Клиенти

- **Списък на клиентите** със сървърна обработка (Yajra DataTables, `ClientsDataTable`), филтри, избор на редове и групови действия (`applyQuickAction`: масово изтриване и смяна на статус).
- **Създаване и редактиране на клиент** (`ClientController`, `StoreClientRequest`, `UpdateClientRequest`), включително бързо създаване (`quick_create`) и създаване на клиент от съществуващ lead (`create($leadID)`); потребителски полета чрез `CustomFieldsTrait`; данни за ДДС/данъчно име (`tax_name`) и електронен адрес за е-фактури (`electronic_address`, `electronic_address_scheme`) – чрез допълващите миграции. При записване се прилага ограничение за максимален брой клиенти според пакета на фирмата (`checkCompanyCanAddMoreClients`), а привилегированите колони на потребителя (статус, роля, `company_id` и др.) не се присвояват масово.
- **Профил на клиента** (`clients/show`) с табове: профил, проекти, фактури, плащания, оферти (estimates), кредитни известия, поръчки, тикети, контакти, бележки, документи и GDPR; статистика и графики за проекти и фактури. Таб на модул, който е изключен за фирмата, връща 403.
- **Категории и подкатегории** на клиенти (`ClientCategory`, `ClientSubCategory`).
- **Контакти към клиент** (`ClientContact`) – отделни лица към една клиентска фирма.
- **Бележки към клиент** (`ClientNote`, `ClientUserNote`) с възможност за защита с парола: достъпът се потвърждава с паролата на текущия потребител (`askForPassword`, `checkPassword`, `showVerified`).
- **Документи на клиент** (`ClientDocument`) – качване, преглед, изтегляне, права за преглед/редакция/изтриване (`view_client_document`, `edit_client_document`, `delete_client_document`).
- **Масов импорт на клиенти** от таблица: `ClientImport` (Maatwebsite Excel, `ToArray`), асинхронна обработка в опашка (`ImportClientJob implements ShouldQueue`), страници за качване и напредък.
- **GDPR**: таб със съгласия на клиента (`ClientGDPRDataTable`), форма за съгласие (`clients/gdpr/consent-form`).
- **Самостоятелна регистрация на клиент** по публичен адрес на фирмата (`client-signup/{company:hash}`), настройка за разрешаване и за одобрение от администратор (`approve`).
- **Клиентско табло**: админ-табът „Клиенти“ (`ClientDashboard`, `dashboard/ajax/client`) и личното табло на клиента (`ClientPanelDashboard`, `dashboard/client`) – платени/неплатени фактури, подписани договори, проекти по статус.
- **Известия към клиента** за задачи (`NewClientTask`, `TaskCommentClient`, `TaskCompletedClient`, `TaskNoteClient`, `TaskUpdatedClient`).
- **Blade компоненти** за показване и избор на клиент (`x-client`, `x-client-image`, `x-client-search-option`, `x-client-selection-dropdown`).

### Договори с клиенти

- **Договори** (`Contract`): списък, създаване, редакция, обобщение, копиране, групови действия, сума, валута, тип, проект, клиент и потребителски полета; синхронизация със събитие в Google Calendar, когато е включена за фирмата (`ContractObserver`).
- **Типове договори** (`ContractType`) и примерен seeder с типове.
- **Шаблони на договори** (`ContractTemplate`) – повторно използваеми шаблони за създаване на договор.
- **Подновяване** (`ContractRenew`) с история на подновяванията.
- **Дискусии** (`ContractDiscussion`) и **прикачени файлове** (`ContractFile`) към договор.
- **Подписване**: подпис от клиента (`ContractSign`, нарисуван подпис с `signature_pad` или качено изображение) през публична страница с подписан URL (`/contract/{hash}`), както и подпис от страна на фирмата (`companySign`); събитие `ContractSignedEvent`.
- **PDF** на договора (DomPDF, `contracts/contract-pdf`) и публично изтегляне.
- **Известия**: `NewContract` и `ContractSigned` (`database` + `mail`), през събития и слушатели.
- **Настройки на договорите**: префикс, разделител и брой цифри в номера на договор (`ContractSettingController`; стойностите се пазят в `InvoiceSetting`), отделно право `manage_contract_setting`.
- **Джаджа за таблото** за договори и крайните им дати (`dashboard/employee/widgets/contract`).

## Структура на папките

Общо **210** файла (вкл. `README.md` и `.gitignore`).

| Категория | Папка | Файлове |
|-----------|-------|--------:|
| Модели | `app/Models` | 14 |
| Observers | `app/Observers` | 14 |
| Контролери | `app/Http/Controllers` | 13 |
| Form Requests | `app/Http/Requests` | 23 |
| DataTables | `app/DataTables` | 6 |
| Събития | `app/Events` | 2 |
| Слушатели | `app/Listeners` | 2 |
| Известия (Notifications) | `app/Notifications` | 7 |
| Импорт | `app/Imports` | 1 |
| Задачи в опашка (Jobs) | `app/Jobs` | 1 |
| Traits (клиентско табло) | `app/Traits` | 2 |
| Blade компоненти (класове) | `app/View/Components` | 3 |
| Миграции | `database/migrations` | 13 |
| Seeders | `database/seeders` | 2 |
| Factories | `database/factories` | 1 |
| Изгледи – клиенти | `resources/views/clients` | 33 |
| Изгледи – договори | `resources/views/contracts`, `resources/views/contract.blade.php` | 19 |
| Изгледи – шаблони на договори | `resources/views/contract-template` | 6 |
| Изгледи – настройки на договори | `resources/views/contract-settings` | 1 |
| Изгледи – компоненти | `resources/views/components` | 4 |
| Изгледи – табла | `resources/views/dashboard` | 3 |
| Изгледи – известия и имейли | `resources/views/notifications`, `resources/views/mail` | 8 |
| Изгледи – профил, настройки, регистрация | `resources/views/profile-settings`, `app-settings`, `super-admin/front` | 4 |
| Стилове | `resources/scss` | 1 |
| Езикови фрагменти (EN) | `resources/lang/eng/_extract` | 12 |
| Езикови фрагменти (BG) | `resources/lang/bg/_extract` | 12 |
| Маршрути (референция) | `routes/clients.routes.php` | 1 |
| Служебни | `README.md`, `.gitignore` | 2 |

Допълнителни бележки за отделни групи:

- **Миграциите** са само допълващи (добавяне/промяна на колони, права, корекции на данни, шаблони на договори). Основните таблици (`client_details`, `client_contacts`, `client_notes`, `client_documents`, `client_categories`, `client_sub_categories`, `client_user_notes`, `contracts`, `contract_types`, `contract_discussions`, `contract_files`, `contract_renews`, `contract_signs`) се създават от общите базови миграции на основната система и **не са включени**. Миграцията `contract_templates` създава таблицата за шаблони.
- **Езиковите файлове** не могат да се копират върху оригиналите (те са общи за цялата система). Затова `resources/lang/{eng,bg}/_extract/*.clients.php` съдържат само извлечените ключове, свързани с клиенти и договори (`app`, `clan`, `email`, `messages`, `modules`, `permissions`, `placeholders`, `superadmin`, `validation`, `ui-core`, `ui-crm`, `ui-misc`), и трябва да се **слеят** в съответните файлове на хоста. Отделните `databackd-*.php` езикови файлове на AFV не са включени.
- **Маршрутите** са извадени от `routes/web.php`, `routes/web-public.php`, `routes/web-settings.php` и `routes/SuperAdmin/web-public.php` в един референтен файл `routes/clients.routes.php`. В AFV публичният подпис на договор е `POST /contract/sign/{hash}`.
- **Експорт**: няма отделен Export клас – експортът към Excel е бутон на Yajra DataTables (`ClientsDataTable`, `ContractsDataTable`).

## Зависимости от останалата система

Следното се използва от модула, но е **споделено и не е включено** в това репо:

- **Мултифирменост**: trait `App\Traits\HasCompany` и глобален scope `App\Scopes\CompanyScope` (и `ActiveScope`) – всички модели на модула са с `company_id`.
- **Базови класове**: `App\Models\BaseModel`, `App\Http\Controllers\AccountBaseController`, `App\DataTables\BaseDataTable`.
- **Потребители и роли**: модел `User` (клиентът е потребител с роля `client`; детайлите му са в `ClientDetails`), `Role`, `Company`, система за права (`user()->permission(...)`, `user_roles()`, `user_modules()`).
- **Свързани модули на AFV**: `Project`, `Invoice`, `Payment`, `Estimate`, `CreditNote`, `Order`, `Ticket`, `Lead` (създаване на клиент от lead), `Currency`, `InvoiceSetting` (номерация на договори), `PurposeConsent*` (GDPR), `PackageUpdateNotify`, `UniversalSearch`, `Notification`, `LanguageSetting` и техните DataTables (`InvoicesDataTable`, `PaymentsDataTable`, `ProjectsDataTable`, `TicketDataTable` и др.), използвани в табовете на клиента.
- **Общи traits и помощници**: `CustomFieldsTrait`, `IconTrait`, `EmployeeActivityTrait`, `ImportExcel`, `App\Helper\Files`, `App\Helper\Reply`, `App\Enums\Salutation`.
- **Помощни функции** в `app/Helper/start.php` и `app/Helper/databackd.php`: `user()`, `company()`, `abort_403()`, `invoice_setting()`, `global_setting()`, `companyToYmd()`, `getDomainSpecificUrl()`, `pdfLoadHtml()`, `checkCompanyCanAddMoreClients()`, `clearCompanyValidPackageCache()`, `isRunningInConsoleOrSeeding()` и др.
- **Клиентският портал/профил – `databackd_client_url($userId)`** (`app/Helper/databackd.php`): връща URL към `clients.show` или `null`, когато текущият потребител не може да отваря клиентски профили (няма модул „Клиенти“, потребителят е с роля `client` или правото `view_clients` е `none`/`owned`). Използва се за връзките към клиент в `ContractsDataTable`, компонентите `x-client` и `x-client-image` и в много външни изгледи (проекти, тикети, плащания, известия). Свързани helper-и: `databackd_profile_access()` (изчислява веднъж на заявка достъпа до профили), `databackd_hidden($group, $key)` (чете `config/databackd.php`) и `databackd_employee_url()`. Те **не са включени** и трябва да присъстват в основния проект. Таблото на самия клиент (портал) е в `dashboard/client` и `ClientPanelDashboard`, а `dashboard/_dbk-chart.blade.php` (споделен partial за графики) също е външна зависимост.
- **Споделени контролери с методи за модула**: `PublicUrlController` (`contractView`, `contractSign`, `contractDownload`), `SuperAdmin\FrontendController` (`clientSignup`, `clientRegister`), `TicketController::getContacts`, `AppSettingController`, `DashboardController`.
- **Регистрация**: `App\Providers\EventServiceProvider` (връзки модел → observer и събитие → слушател) и `RouteServiceProvider`.
- **Общи изгледи и layout-и**: `layouts/app`, `x-forms.*` и други Blade компоненти, както и общите JS/CSS ресурси от `public/`; `signature_pad` се зарежда от CDN.
- **Пакети**: `yajra/laravel-datatables-oracle`, `maatwebsite/excel`, `barryvdh/laravel-dompdf`.

## Изисквания

- PHP **>= 8.2** (`composer.json` на AFV: `"php": "^8.2"`)
- Laravel **12.x** (`laravel/framework: ^12.0`)
- MariaDB (10.x / 11.x) или MySQL 8.0
- Работеща инсталация на Anagami Finance View (виж „Зависимости“)
- Опашка (queue worker) за асинхронния импорт на клиенти

## Интеграция

1. **Копиране на файловете.** Пътищата следват структурата на Laravel проекта, затова от корена на репото:

   ```bash
   rsync -av --exclude='.git' --exclude='README.md' --exclude='.gitignore' \
         --exclude='resources/lang' --exclude='routes' \
         ./ /път/до/anagami-finance-view/
   ```

   Файловете със същото име в основния проект ще бъдат презаписани – прегледайте промените с `git diff`.

2. **Миграции.** Копираните миграции са допълващи и предполагат, че базовите таблици вече съществуват. След копиране:

   ```bash
   php artisan migrate
   ```

3. **Observers и събития.** Регистрирайте в `app/Providers/EventServiceProvider.php`:
   - събития: `NewContractEvent => NewContractListener`, `ContractSignedEvent => ContractSignedListener`;
   - observers: `ClientDetails`, `ClientContact`, `ClientDocument`, `ClientNote`, `ClientUserNote`, `ClientCategory`, `ClientSubCategory`, `Contract`, `ContractDiscussion`, `ContractFile`, `ContractRenew`, `ContractSign`, `ContractTemplate`, `ContractType` към съответните им `*Observer` класове.

4. **Маршрути.** Или заредете `routes/clients.routes.php` от `RouteServiceProvider`, или прехвърлете отделните групи в оригиналните файлове (`web.php`, `web-public.php`, `web-settings.php`, `SuperAdmin/web-public.php`) – в заглавието на файла е описано кое откъде е извадено. Автентикираните маршрути използват префикс `account` и middleware `auth`, `multi-company-select`, `email_verified`.

5. **Преводи.** Слейте ключовете от `resources/lang/eng/_extract/*.clients.php` и `resources/lang/bg/_extract/*.clients.php` в съответните файлове в `resources/lang/eng/` и `resources/lang/bg/` на хоста.

6. **Seeders (по избор).** `ContractTypeTableSeeder` и `ContractTableSeeder` добавят примерни типове и договори; `ContractFactory` е за тестови данни.

7. **Frontend.** `resources/scss/client.scss` се включва в SCSS билда на основния проект; след това `npm run dev` / `npm run prod`.

8. **Кеш.** След интеграцията: `php artisan view:clear && php artisan route:clear && php artisan config:clear`, а за асинхронния импорт – `php artisan queue:work`.

## Скрити менюта през config/databackd.php

В AFV част от интерфейса е скрит през `config/databackd.php` (ключ `hidden`; четене чрез `databackd_hidden($group, $key)`; маршрутите и кодът остават непроменени, а за супер-админ скриването не важи). Спрямо този модул:

- Страничните менюта **„Клиенти“** и **„Договори“** **не** са скрити в конфигурацията – достъпът им зависи само от активния модул и правата (`view_clients`, `view_contract`).
- Скрити са таб **„Клиенти“** на разширеното админ табло (`dashboard_tabs.client`) и свързаните модули, чиито табове се показват в профила на клиента: оферти/estimates (`menu.estimates`), тикети (`menu.tickets`), поръчки (`menu.orders`) и GDPR (`menu.gdpr`). Скрити са и Leads/Deals (`menu.leads`), което прави недостъпно създаването на клиент от lead.
- Настройката за самостоятелна регистрация на клиенти е таб `client-signup-setting` в „Настройки на приложението“ (`AppSettingController`) и **не** е скрита; отделната страница `settings.sign_up_setting` (регистрация на фирми) е скрита, но не е част от този модул.
- Ролята `client` вижда в страничното меню на AFV само позициите от `client_menu` (услугата „Екипи“), а не клиентските секции на този модул.

За да се покаже скрит елемент, стойността му в `config/databackd.php` се сменя на `false`.

## Какво не е включено

- Leads и deals (отделен CRM модул, вкл. `create_lead_contract_table`), фактури, проекти, оферти, тикети, поръчки и финансовите модули на AFV (`databackd-*` – анализи, планиране, отчети, данни) – само се използват от табовете на клиента.
- Маркетингови настройки „Клиенти“ на публичния сайт на SaaS платформата (`FrontClients`, `ClientSettingController`, `ClientPayment`) и известието `NewCustomer` (регистрация на нова фирма) – не са част от функционалността за клиенти.
- Чат съобщения към клиент (`ClientChatStore`) и общите известия на клиента за фактури, оферти, плащания и др. (`resources/views/notifications/client/*` без изброените за договори и клиентски задачи).
- Базовите миграции, миграцията с номерация на договори (`2023_09_25_..._add_column_for_number_with_prefix`, която променя и други модули), `vendor/`, `node_modules/`, компилираните ресурси в `public/`, `.env` и всякакви ключове, пароли и адреси на сървъри.

## Забележки

- Модулът е част от продукт на базата на Laravel; в името на пространствата, помощните функции и конфигурацията са запазени кодовите идентификатори `databackd` (напр. `databackd_client_url()`, `config/databackd.php`), а някои имена в кода идват от оригиналната кодова база.
- Репото е **частно** (`anagamibg/anagami-finance-view-clients`) и е само за вътрешно ползване.
