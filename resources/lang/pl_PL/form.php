<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Nazwa banku',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo konta oszczędnościowego',
    'credit_card_limit'           => 'Limit karty kredytowej',
    'automatch'                   => 'Dopasuj automatycznie',
    'skip'                        => 'Pomiń',
    'enabled'                     => 'Aktywna',
    'name'                        => 'Nazwa',
    'active'                      => 'Aktywny',
    'amount_min'                  => 'Minimalna kwota',
    'amount_max'                  => 'Maksymalna kwota',
    'match'                       => 'Dopasowanie',
    'strict'                      => 'Tryb ścisły',
    'repeat_freq'                 => 'Powtarza się',
    'object_group'                => 'Grupa',
    'location'                    => 'Lokalizacja',
    'update_channel'              => 'Kanał aktualizacji',
    'currency_id'                 => 'Waluta',
    'transaction_currency_id'     => 'Waluta',
    'auto_budget_currency_id'     => 'Waluta',
    'external_ip'                 => 'Zewnętrzny adres IP Twojego serwera',
    'attachments'                 => 'Załączniki',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Sprawdź bezpieczeństwo hasła',
    'source_account'              => 'Konto źródłowe',
    'destination_account'         => 'Konto docelowe',
    'asset_destination_account'   => 'Konto docelowe',
    'include_net_worth'           => 'Uwzględnij w wartości netto',
    'asset_source_account'        => 'Konto źródłowe',
    'journal_description'         => 'Opis',
    'note'                        => 'Notatki',
    'currency'                    => 'Waluta',
    'account_id'                  => 'Konto aktywów',
    'budget_id'                   => 'Budżet',
    'opening_balance'             => 'Saldo początkowe',
    'tagMode'                     => 'Tryb tagów',
    'virtual_balance'             => 'Wirtualne saldo',
    'targetamount'                => 'Kwota docelowa',
    'account_role'                => 'Rola konta',
    'opening_balance_date'        => 'Data salda otwarcia',
    'cc_type'                     => 'Plan płatności kartą kredytową',
    'cc_monthly_payment_date'     => 'Miesięczny termin spłaty karty kredytowej',
    'piggy_bank_id'               => 'Skarbonka',
    'returnHere'                  => 'Wróć tutaj',
    'returnHereExplanation'       => 'Po zapisaniu, wrócić tutaj.',
    'returnHereUpdateExplanation' => 'Po aktualizacji, wróć tutaj.',
    'description'                 => 'Opis',
    'expense_account'             => 'Konto wydatków',
    'revenue_account'             => 'Konto przychodów',
    'decimal_places'              => 'Miejsca dziesiętne',
    'destination_amount'          => 'Kwota (przeznaczenie)',
    'new_email_address'           => 'Nowy adres e-mail',
    'verification'                => 'Weryfikacja',
    'api_key'                     => 'Klucz API',
    'remember_me'                 => 'Zapamiętaj mnie',
    'liability_type_id'           => 'Rodzaj zobowiązania',
    'liability_type'              => 'Liability type',
    'interest'                    => 'Odsetki',
    'interest_period'             => 'Okres odsetkowy',

    'type'               => 'Typ',
    'convert_Withdrawal' => 'Konwertuj wypłatę',
    'convert_Deposit'    => 'Konwertuj wpłatę',
    'convert_Transfer'   => 'Konwertuj transfer',

    'amount'                      => 'Kwota',
    'foreign_amount'              => 'Kwota zagraniczna',
    'date'                        => 'Data',
    'interest_date'               => 'Data odsetek',
    'book_date'                   => 'Data księgowania',
    'process_date'                => 'Data przetworzenia',
    'category'                    => 'Kategoria',
    'tags'                        => 'Tagi',
    'deletePermanently'           => 'Usuń trwale',
    'cancel'                      => 'Anuluj',
    'targetdate'                  => 'Data docelowa',
    'startdate'                   => 'Data rozpoczęcia',
    'tag'                         => 'Tag',
    'under'                       => 'Poniżej',
    'symbol'                      => 'Symbol',
    'code'                        => 'Kod',
    'iban'                        => 'IBAN',
    'account_number'              => 'Numer konta',
    'creditCardNumber'            => 'Numer karty kredytowej',
    'has_headers'                 => 'Nagłówki',
    'date_format'                 => 'Format daty',
    'specifix'                    => 'Poprawki dla banku lub pliku',
    'attachments[]'               => 'Załączniki',
    'title'                       => 'Tytuł',
    'notes'                       => 'Notatki',
    'filename'                    => 'Nazwa pliku',
    'mime'                        => 'Typ MIME',
    'size'                        => 'Rozmiar',
    'trigger'                     => 'Wyzwalacz',
    'stop_processing'             => 'Zatrzymaj przetwarzanie',
    'start_date'                  => 'Początek zakresu',
    'end_date'                    => 'Koniec zakresu',
    'start'                       => 'Początek zakresu',
    'end'                         => 'Koniec zakresu',
    'delete_account'              => 'Usuń konto ":name"',
    'delete_bill'                 => 'Usuń rachunek ":name"',
    'delete_budget'               => 'Usuń budżet ":name"',
    'delete_category'             => 'Usuń kategorię ":name"',
    'delete_currency'             => 'Usuń walutę ":name"',
    'delete_journal'              => 'Usuń transakcję z opisem ":description"',
    'delete_attachment'           => 'Usuń załącznik ":name"',
    'delete_rule'                 => 'Usuń regułę ":title"',
    'delete_rule_group'           => 'Usuń grupę reguł ":title"',
    'delete_link_type'            => 'Usuń typ łącza ":name"',
    'delete_user'                 => 'Usuń użytkownika ":email"',
    'delete_recurring'            => 'Usuń cykliczną transakcję ":title"',
    'user_areYouSure'             => 'Jeśli usuniesz użytkownika ":email", wszystko zniknie. Nie ma cofania, przywracania ani czegokolwiek. Jeśli usuniesz siebie, stracisz dostęp do tej instalacji Firefly III.',
    'attachment_areYouSure'       => 'Czy na pewno chcesz usunąć załącznik o nazwie ":name"?',
    'account_areYouSure'          => 'Czy na pewno chcesz usunąć konto o nazwie ":name"?',
    'account_areYouSure_js'       => 'Czy na pewno chcesz usunąć konto o nazwie "{name}"?',
    'bill_areYouSure'             => 'Czy na pewno chcesz usunąć rachunek o nazwie ":name"?',
    'rule_areYouSure'             => 'Czy na pewno chcesz usunąć regułę o nazwie ":name"?',
    'object_group_areYouSure'     => 'Czy na pewno chcesz usunąć grupę o nazwie ":title"?',
    'ruleGroup_areYouSure'        => 'Czy na pewno chcesz usunąć grupę reguł o nazwie ":name"?',
    'budget_areYouSure'           => 'Czy na pewno chcesz usunąć budżet o nazwie ":name"?',
    'category_areYouSure'         => 'Czy na pewno chcesz usunąć kategorię o nazwie ":name"?',
    'recurring_areYouSure'        => 'Czy na pewno chcesz usunąć cykliczną transakcję o nazwie ":title"?',
    'currency_areYouSure'         => 'Czy na pewno chcesz usunąć walutę o nazwie ":name"?',
    'piggyBank_areYouSure'        => 'Czy na pewno chcesz usunąć skarbonkę o nazwie ":name"?',
    'journal_areYouSure'          => 'Czy na pewno chcesz usunąć transakcję opisaną ":description"?',
    'mass_journal_are_you_sure'   => 'Czy na pewno chcesz usunąć te transakcje?',
    'tag_areYouSure'              => 'Czy na pewno chcesz usunąć tag ":tag"?',
    'journal_link_areYouSure'     => 'Czy na pewno chcesz usunąć powiązanie między <a href=":source_link">:source</a> a <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Czy na pewno chcesz usunąć typ łącza ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Usuwanie rzeczy z Firefly III jest trwałe i nie można tego cofnąć.',
    'mass_make_selection'         => 'Nadal możesz zapobiec usunięciu elementów, odznaczając je.',
    'delete_all_permanently'      => 'Trwale usuń zaznaczone',
    'update_all_journals'         => 'Zmodyfikuj te transakcje',
    'also_delete_transactions'    => 'Jedyna transakcja powiązana z tym kontem zostanie również usunięta.|Wszystkie transakcje (:count) powiązane z tym kontem zostaną również usunięta.',
    'also_delete_transactions_js' => 'Brak transakcji|Jedyna transakcja połączona z tym kontem również zostanie usunięta.|Wszystkie {count} transakcje połączone z tym kontem również zostaną usunięte.',
    'also_delete_connections'     => 'Jedyna transakcja połączona z tym typem łącza utraci to połączenie.|Wszystkie transakcje (:count) połączone tym typem łącza utracą swoje połączenie.',
    'also_delete_rules'           => 'Jedyna reguła połączona z tą grupą reguł zostanie również usunięta.|Wszystkie reguły (:count) połączone tą grupą reguł zostaną również usunięte.',
    'also_delete_piggyBanks'      => 'Jedyna skarbonka połączona z tym kontem zostanie również usunięta.|Wszystkie skarbonki (:count) połączone z tym kontem zostaną również usunięte.',
    'also_delete_piggyBanks_js'   => 'Brak skarbonek|Jedyna skarbonka połączona z tym kontem również zostanie usunięta.|Wszystkie {count} skarbonki połączone z tym kontem zostaną również usunięte.',
    'not_delete_piggy_banks'      => 'Skarbonka połączona z tą grupą nie zostanie usunięta.|:count skarbonek połączonych z tą grupą nie zostanie usunięte.',
    'bill_keep_transactions'      => 'Jedyna transakcja związana z tym rachunkiem nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tym rachunkiem zostaną oszczędzone.',
    'budget_keep_transactions'    => 'Jedyna transakcja związana z tym budżetem nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tym budżetem zostaną oszczędzone.',
    'category_keep_transactions'  => 'Jedyna transakcja związana z tą kategorią nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tą kategorią zostaną oszczędzone.',
    'recurring_keep_transactions' => 'Jedyna transakcja utworzona przez tę cykliczną transakcję nie zostanie usunięta.|Wszystkie transakcje (:count) utworzone przez tę cykliczną transakcję zostaną oszczędzone.',
    'tag_keep_transactions'       => 'Jedyna transakcja związana z tym tagiem nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tym tagiem nie zostaną skasowane.',
    'check_for_updates'           => 'Sprawdź aktualizacje',
    'liability_direction'         => 'Liability in/out',

    'delete_object_group' => 'Usuń grupę ":title"',

    'email'                 => 'Adres email',
    'password'              => 'Hasło',
    'password_confirmation' => 'Hasło (ponownie)',
    'blocked'               => 'Jest zablokowany?',
    'blocked_code'          => 'Powód blokady',
    'login_name'            => 'Login',
    'is_owner'              => 'Czy admin?',

    // import
    'apply_rules'           => 'Zastosuj reguły',
    'artist'                => 'Artysta',
    'album'                 => 'Album',
    'song'                  => 'Piosenka',


    // admin
    'domain'                => 'Domena',
    'single_user_mode'      => 'Wyłącz rejestrację użytkowników',
    'is_demo_site'          => 'Jest stroną demo',

    // import
    'configuration_file'    => 'Plik konfiguracyjny',
    'csv_comma'             => 'Przecinek (,)',
    'csv_semicolon'         => 'Średnik (;)',
    'csv_tab'               => 'Tabulator (niewidoczny)',
    'csv_delimiter'         => 'Ogranicznik pola CSV',
    'client_id'             => 'ID klienta',
    'app_id'                => 'ID aplikacji',
    'secret'                => 'Sekret',
    'public_key'            => 'Klucz publiczny',
    'country_code'          => 'Kod kraju',
    'provider_code'         => 'Dostawca banku lub danych',
    'fints_url'             => 'Adres FinTS',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Kod banku',
    'fints_username'        => 'Nazwa użytkownika',
    'fints_password'        => 'PIN / hasło',
    'fints_account'         => 'Konto FinTS',
    'local_account'         => 'Konto Firefly III',
    'from_date'             => 'Data od',
    'to_date'               => 'Data do',


    'due_date'                => 'Termin realizacji',
    'payment_date'            => 'Data płatności',
    'invoice_date'            => 'Data faktury',
    'internal_reference'      => 'Wewnętrzny numer',
    'inward'                  => 'Opis wewnętrzny',
    'outward'                 => 'Opis zewnętrzny',
    'rule_group_id'           => 'Grupa reguł',
    'transaction_description' => 'Opis transakcji',
    'first_date'              => 'Data początkowa',
    'transaction_type'        => 'Typ transakcji',
    'repeat_until'            => 'Powtarzaj aż',
    'recurring_description'   => 'Opis cyklicznej transakcji',
    'repetition_type'         => 'Tryb powtarzania',
    'foreign_currency_id'     => 'Zagraniczna waluta',
    'repetition_end'          => 'Koniec powtarzania',
    'repetitions'             => 'Powtórzenia',
    'calendar'                => 'Kalendarz',
    'weekend'                 => 'Weekend',
    'client_secret'           => 'Sekret klienta',

    'withdrawal_destination_id' => 'Konto docelowe',
    'deposit_source_id'         => 'Konto źródłowe',
    'expected_on'               => 'Oczekiwany',
    'paid'                      => 'Zapłacone',

    'auto_budget_type'   => 'Auto-budżet',
    'auto_budget_amount' => 'Kwota automatycznego budżetu',
    'auto_budget_period' => 'Okres automatycznego budżetu',

    'collected' => 'Zebrane',
    'submitted' => 'Przesłane',
    'key'       => 'Klucz',
    'value'     => 'Zawartość rekordu',


];
