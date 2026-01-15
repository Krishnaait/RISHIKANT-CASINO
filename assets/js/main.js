/**
 * Rishikant Casino - Main JavaScript
 * Common functionality for all pages
 */

// ============================================
// UTILITY FUNCTIONS
// ============================================

/**
 * Format number with commas
 */
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

/**
 * Show toast notification
 */
function showToast(message, type = 'info', duration = 3000) {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('show');
    }, 100);

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, duration);
}

/**
 * Fetch with error handling
 */
async function safeFetch(url, options = {}) {
    try {
        const response = await fetch(url, options);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        console.error('Fetch error:', error);
        showToast('An error occurred. Please try again.', 'error');
        return null;
    }
}

/**
 * Get URL parameters
 */
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

/**
 * Validate bet amount
 */
function isValidBet(amount, balance, minBet = 10, maxBet = 1000) {
    amount = parseInt(amount);
    return amount >= minBet && amount <= maxBet && amount <= balance;
}

/**
 * Generate random number
 */
function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/**
 * Calculate multiplier
 */
function calculateMultiplier(baseMultiplier, count) {
    return (baseMultiplier * count).toFixed(2);
}

// ============================================
// BALANCE MANAGEMENT
// ============================================

/**
 * Get current balance from session
 */
async function getBalance() {
    const data = await safeFetch('/api/get-balance.php');
    return data ? data.balance : 0;
}

/**
 * Update balance display
 */
async function updateBalanceDisplay() {
    const balance = await getBalance();
    const balanceDisplay = document.getElementById('balanceDisplay');
    if (balanceDisplay) {
        balanceDisplay.textContent = formatNumber(balance);
    }
}

/**
 * Update balance after game
 */
async function updateBalance(amount) {
    const data = await safeFetch('/api/update-balance.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ amount: amount })
    });

    if (data && data.success) {
        updateBalanceDisplay();
        return data.balance;
    }
    return null;
}

// ============================================
// GAME FUNCTIONS
// ============================================

/**
 * Play game
 */
async function playGame(gameId, betAmount, difficulty = 'medium') {
    if (!isValidBet(betAmount, await getBalance())) {
        showToast('Invalid bet amount!', 'error');
        return null;
    }

    const data = await safeFetch('/api/play-game.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            gameId: gameId,
            betAmount: betAmount,
            difficulty: difficulty
        })
    });

    if (data && data.success) {
        updateBalanceDisplay();
        return data;
    }
    return null;
}

/**
 * Get game rules
 */
async function getGameRules(gameId) {
    return await safeFetch(`/api/get-game-rules.php?gameId=${gameId}`);
}

/**
 * Get game history
 */
async function getGameHistory(gameId, limit = 5) {
    return await safeFetch(`/api/get-game-history.php?gameId=${gameId}&limit=${limit}`);
}

// ============================================
// DOM READY
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    // Initialize balance display
    updateBalanceDisplay();

    // Refresh balance every 10 seconds
    setInterval(updateBalanceDisplay, 10000);

    // Mobile menu toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Close menu when link is clicked
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
            });
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (navMenu && navToggle) {
            if (!navMenu.contains(event.target) && !navToggle.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Page scroll to top on load
    window.scrollTo(0, 0);
});

// ============================================
// WINDOW FUNCTIONS
// ============================================

/**
 * Scroll to top
 */
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

/**
 * Open full screen
 */
function openFullscreen(element) {
    if (element.requestFullscreen) {
        element.requestFullscreen();
    } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();
    } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen();
    }
}

/**
 * Exit full screen
 */
function exitFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
    }
}

/**
 * Toggle full screen
 */
function toggleFullscreen(element) {
    if (!document.fullscreenElement) {
        openFullscreen(element);
    } else {
        exitFullscreen();
    }
}

// ============================================
// FORM VALIDATION
// ============================================

/**
 * Validate email
 */
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

/**
 * Validate form
 */
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;

    let isValid = true;
    const inputs = form.querySelectorAll('input, textarea, select');

    inputs.forEach(input => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            input.classList.add('error');
            isValid = false;
        } else if (input.type === 'email' && input.value && !isValidEmail(input.value)) {
            input.classList.add('error');
            isValid = false;
        } else {
            input.classList.remove('error');
        }
    });

    return isValid;
}

// ============================================
// LOCAL STORAGE
// ============================================

/**
 * Save to local storage
 */
function saveToStorage(key, value) {
    try {
        localStorage.setItem(key, JSON.stringify(value));
        return true;
    } catch (error) {
        console.error('Error saving to storage:', error);
        return false;
    }
}

/**
 * Get from local storage
 */
function getFromStorage(key) {
    try {
        const item = localStorage.getItem(key);
        return item ? JSON.parse(item) : null;
    } catch (error) {
        console.error('Error getting from storage:', error);
        return null;
    }
}

/**
 * Remove from local storage
 */
function removeFromStorage(key) {
    try {
        localStorage.removeItem(key);
        return true;
    } catch (error) {
        console.error('Error removing from storage:', error);
        return false;
    }
}

// ============================================
// ANALYTICS
// ============================================

/**
 * Track event
 */
function trackEvent(eventName, eventData = {}) {
    if (typeof gtag !== 'undefined') {
        gtag('event', eventName, eventData);
    }
}

/**
 * Track page view
 */
function trackPageView(pageName) {
    if (typeof gtag !== 'undefined') {
        gtag('config', 'GA_MEASUREMENT_ID', {
            'page_path': pageName
        });
    }
}

// ============================================
// ERROR HANDLING
// ============================================

/**
 * Global error handler
 */
window.addEventListener('error', function(event) {
    console.error('Global error:', event.error);
    // Don't show error toast for non-critical errors
});

/**
 * Unhandled promise rejection
 */
window.addEventListener('unhandledrejection', function(event) {
    console.error('Unhandled promise rejection:', event.reason);
});
