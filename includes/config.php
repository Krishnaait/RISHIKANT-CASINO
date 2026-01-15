<?php
/**
 * Rishikant Casino - Configuration File
 * Global settings and constants
 */

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Site Configuration
define('SITE_NAME', 'Rishikant Casino');
define('SITE_URL', 'https://rishikant-casino.railway.app');
define('SITE_DESCRIPTION', '100% Free-to-Play Social Casino Gaming Platform');

// Company Information
define('COMPANY_NAME', 'Rishikant Entertainment Pvt. Ltd.');
define('COMPANY_CIN', 'U78100JH2023OPC021360');
define('COMPANY_GST', '20AALCC3673P1ZB');
define('COMPANY_ADDRESS', 'Ranchi, Jharkhand, India');
define('COMPANY_EMAIL', 'support@rishikantcasino.com');
define('COMPANY_PHONE', '+91-XXXXXXXXXX');
define('COMPANY_YEAR', date('Y'));

// Game Configuration
define('MIN_BET', 10);
define('MAX_BET', 1000);
define('DEFAULT_BALANCE', 1000);
define('DEFAULT_MULTIPLIER', 1.0);

// Game Win Rates (40-50% for balanced entertainment)
define('CHICKEN_WIN_RATE', 0.40);
define('DICE_WIN_RATE', 0.50);
define('MINES_WIN_RATE', 0.45);
define('PLINKO_WIN_RATE', 0.48);

// Age Verification
define('MIN_AGE', 18);
define('AGE_GATE_SESSION_KEY', 'age_verified');
define('AGE_GATE_COOKIE_NAME', 'rishikant_age_verified');

// Compliance Messages
define('COMPLIANCE_MESSAGE', 'IMPORTANT: This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.');

define('ENTERTAINMENT_ONLY_MESSAGE', 'This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. This is NOT gambling. No real money is involved.');

define('NO_GAMBLING_MESSAGE', 'This platform is for entertainment purposes only. It is NOT gambling. No real money is involved, and virtual coins cannot be exchanged or cashed out.');

// RNG Certification Message
define('RNG_MESSAGE', 'All games use certified random number generators (RNG) to ensure fair and unpredictable outcomes.');

// Responsible Gaming Resources
define('NCPG_HOTLINE', '1-800-522-4700');
define('NCPG_WEBSITE', 'https://www.ncpgambling.org');
define('GAMBLERS_ANONYMOUS', 'https://www.gamblersanonymous.org');

// Helper function to check age verification
function isAgeVerified() {
    if (isset($_SESSION[AGE_GATE_SESSION_KEY]) && $_SESSION[AGE_GATE_SESSION_KEY] === true) {
        return true;
    }
    if (isset($_COOKIE[AGE_GATE_COOKIE_NAME]) && $_COOKIE[AGE_GATE_COOKIE_NAME] === 'true') {
        $_SESSION[AGE_GATE_SESSION_KEY] = true;
        return true;
    }
    return false;
}

// Helper function to set age verification
function setAgeVerified() {
    $_SESSION[AGE_GATE_SESSION_KEY] = true;
    setcookie(AGE_GATE_COOKIE_NAME, 'true', time() + (365 * 24 * 60 * 60), '/');
}

// Helper function to get current balance (from session)
function getBalance() {
    if (!isset($_SESSION['balance'])) {
        $_SESSION['balance'] = DEFAULT_BALANCE;
    }
    return $_SESSION['balance'];
}

// Helper function to set balance
function setBalance($amount) {
    $_SESSION['balance'] = max(0, $amount);
}

// Helper function to update balance
function updateBalance($amount) {
    $current = getBalance();
    setBalance($current + $amount);
}

// Helper function to validate bet amount
function isValidBet($amount) {
    $balance = getBalance();
    return $amount >= MIN_BET && $amount <= MAX_BET && $amount <= $balance;
}

// Helper function to generate random outcome
function getRandomOutcome($min, $max) {
    return random_int($min, $max);
}

// Helper function to get page title
function getPageTitle() {
    return isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME;
}

// Error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

?>
