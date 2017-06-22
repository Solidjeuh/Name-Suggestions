<?php

/**
 * @author    MarkusWME <markuswme@pcgamingfreaks.at>
 * @copyright 2017 MarkusWME
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
 * @license   http://opensource.org/gpl-2.0.php GNU General Public License v2
 * @version   1.0.0
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// Merge name suggestion ACP language data to the existing language data
$lang = array_merge($lang, array(
    'ACP_CAT_PCGF_NAMESUGGESTIONS'                       => 'Naam suggesties',
    'ACP_PCGF_NAMESUGGESTIONS'                           => 'Naam suggesties',
    'ACP_PCGF_NAMESUGGESTIONS_EXPLAIN'                   => 'Hier kan je de instellingen aanpassen voor de naam suggesties.',
    'ACP_PCGF_NAMESUGGESTIONS_SETTINGS'                  => 'Instellingen',
    'ACP_PCGF_NAMESUGGESTIONS_SETTINGS_SAVED'            => 'De instellingen werden succesvol opgeslagen!',
    'ACP_PCGF_NAMESUGGESTIONS_ADD'                       => 'Voeg naam suggestie toe',
    'ACP_PCGF_NAMESUGGESTIONS_ADD_DESCRIPTION'           => 'Hier kan je een nieuwe gebeurtenis (event) toevoegen.',
    'ACP_PCGF_NAMESUGGESTIONS_ADD_SUCCESS'               => 'De gebeurtenis (event) werd succesvol toegevoegd.',
    'ACP_PCGF_NAMESUGGESTIONS_EDIT'                      => 'Onderhoud naam suggesties',
    'ACP_PCGF_NAMESUGGESTIONS_EDIT_EXPLAIN'              => 'Hier kan je een naam suggestie aanpassen.',
    'ACP_PCGF_NAMESUGGESTIONS_EDIT_SUCCESS'              => 'de gebeurtenis (event) werd succesvol aangepast.',
    'ACP_PCGF_NAMESUGGESTIONS_USER_COUNT'                => 'Leden aantal',
    'ACP_PCGF_NAMESUGGESTIONS_USER_COUNT_EXPLAIN'        => 'Hier kun je instellen hoeveel leden voorgesteld moeten worden(0 wil zeggen zal alle gevonden gebruikersnamen getoond zullen worden). Het aantal zal ook gebruikt worden voor het aantal groepen die zullen getoond worden.',
    'ACP_PCGF_NAMESUGGESTIONS_AVATAR_IMAGE_SIZE'         => 'Avatar afbeelding grootte',
    'ACP_PCGF_NAMESUGGESTIONS_AVATAR_IMAGE_SIZE_EXPLAIN' => 'Hier kunt u de grootte van de avatar afbeelding aanpassen (0 = gebruikers avatars uitschakelen).',
    'ACP_PCGF_NAMESUGGESTIONS_EVENTS'                    => 'Gebeurtenissen waaraan de naam suggesties gebonden zijn',
    'ACP_PCGF_NAMESUGGESTIONS_NO_EVENTS'                 => 'Voor de moment zijn er geen gebeurtenissen (event) gedefinieerd.',
    'ACP_PCGF_NAMESUGGESTIONS_EVENT_NAME'                => 'Gebeurtenis (event)',
    'ACP_PCGF_NAMESUGGESTIONS_EVENT_NAME_EXPLAIN'        => 'Kies een gebeurtenis (event) waaraan een naam suggestie gebonden moet worden. Een volledige lijst van gebeurtenissen (events) kan <a href="https://wiki.phpbb.com/Event_List#PHP_Events_.28Hook_Locations.29">hier</a> teruggevonden worden. U kan ook gebeurtenissen (events) gebruiken die gebruikt worden bij andere extensies.',
    'ACP_PCGF_NAMESUGGESTIONS_DESCRIPTION'               => 'Beschrijving',
    'ACP_PCGF_NAMESUGGESTIONS_DESCRIPTION_EXPLAIN'       => 'Hier kan je een beschrijving toevoegen zodat je later nog weet waar deze gebeurtenis (event) uitgevoerd wordt.',
    'ACP_PCGF_NAMESUGGESTIONS_INPUT_SELECTOR'            => 'Input selectie',
    'ACP_PCGF_NAMESUGGESTIONS_INPUT_SELECTOR_EXPLAIN'    => 'Hier kunt u instellen naar welk input element moet worden geluisterd.',
    'ACP_PCGF_NAMESUGGESTIONS_SUGGEST_USERS'             => 'Stel gebruikers voor',
    'ACP_PCGF_NAMESUGGESTIONS_SUGGEST_GROUPS'            => 'Stel groepen voor',
    'ACP_PCGF_NAMESUGGESTIONS_STATUS'                    => 'Status',
    'ACP_PCGF_NAMESUGGESTIONS_ACTIONS'                   => 'Acties',
    'ACP_PCGF_NAMESUGGESTIONS_ACTION_FAILED'             => 'De actie is mislukt! Probeer het later nogmaals.',
    'ACP_PCGF_NAMESUGGESTIONS_CONFIRM_DELETION'          => 'Wil je de gebeurtenis (event) echt verwijderen?',
    'ACP_PCGF_NAMESUGGESTIONS_CONFIRM_DELETION_TEXT'     => 'Je gaat nu deze gebeurtenis (event) verwijderen: "%s". Wil je verdergaan?',
    'ACP_PCGF_NAMESUGGESTIONS_BACK_TO_EDIT'              => '&laquo; Terug naar het management gedeelte',
));
