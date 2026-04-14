<?php
/**
 * SecurityGuard - Comprehensive Security Suite for Sabari Marine
 * Handles: Webshell Scanning, Backdoor Protection, SQLi Shield, XSS Sanitization,
 * Bot Blocking, CSP, Session Protection, and more.
 */

class SecurityGuard {
    private static $instance = null;
    private $bad_bots = [
        'AhrefsBot', 'DotBot', 'MJ12bot', 'SemrushBot', 'baiduspider', 'yandexbot', 
        'proximic', 'rogerbot', 'blexbot', 'extlinks', 'seznamdot', 'exabot'
    ];

    private function __construct() {
        $this->init();
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new SecurityGuard();
        }
        return self::$instance;
    }

    private function init() {
        // 4. Host Header Injection & SEO Hijacking Protection
        $this->validateHost();

        // 10. SECURE_ACCESS Controller
        if (!defined('SECURE_ACCESS')) {
            define('SECURE_ACCESS', true);
        }

        // 11. Session Hijacking Protection
        $this->secureSession();

        // 12. Malicious Bot Blocker
        $this->blockBadBots();

        // 5. Global XSS Sanitizer & 3. SQL Injection Shield
        $this->sanitizeInputs();

        // 1. Webshell Scanner & 2. Backdoor Protection
        $this->detectMaliciousPatterns();

        // Security Headers (CSP, Clickjacking, etc.)
        $this->setSecurityHeaders();

        // 19. Information Leakage Shield
        $this->hideInformation();
    }

    private function validateHost() {
        $allowed_hosts = ['sabarimarine.in', 'www.sabarimarine.in', 'localhost'];
        $current_host = $_SERVER['HTTP_HOST'] ?? '';
        
        // Remove port if present
        $current_host = explode(':', $current_host)[0];

        if (!empty($current_host) && !in_array($current_host, $allowed_hosts)) {
            $this->logSecurityEvent("Host Header Hijacking", $current_host);
            http_response_code(400);
            die("Security Shield: Invalid Host Header.");
        }
    }

    private function secureSession() {
        if (session_status() == PHP_SESSION_NONE) {
            ini_set('session.cookie_httponly', 1);
            ini_set('session.cookie_secure', isset($_SERVER['HTTPS']) ? 1 : 0);
            ini_set('session.use_only_cookies', 1);
            session_start();
        }

        if (!isset($_SESSION['user_ip'])) {
            $_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        } else {
            if ($_SESSION['user_ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
                session_unset();
                session_destroy();
                die("Security Violation: Session mismatch.");
            }
        }

        // Randomly regenerate session ID to prevent fixation
        if (rand(1, 100) <= 5) {
            session_regenerate_id(true);
        }
    }

    private function blockBadBots() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        foreach ($this->bad_bots as $bot) {
            if (stripos($user_agent, $bot) !== false) {
                http_response_code(403);
                die("Access Denied: Malicious Bot Detected.");
            }
        }
    }

    private function sanitizeInputs() {
        $_GET = $this->sanitizeArray($_GET);
        $_POST = $this->sanitizeArray($_POST);
        $_COOKIE = $this->sanitizeArray($_COOKIE);
        $_REQUEST = $this->sanitizeArray($_REQUEST);
    }

    private function sanitizeArray($data) {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->sanitizeArray($value);
            } else {
                // 5. Global XSS Sanitizer
                $data[$key] = htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8');
                
                // 3. SQL Injection Shield (Basic pattern check)
                $sqli_patterns = ["/union\s+select/i", "/select\s+.*\s+from/i", "/insert\s+into/i", "/update\s+.*\s+set/i", "/delete\s+from/i", "/drop\s+table/i", "/--/"];
                foreach ($sqli_patterns as $pattern) {
                    if (preg_match($pattern, $value)) {
                        $this->logSecurityEvent("SQLi Attempt", $value);
                        die("Security Shield: Suspicious activity detected.");
                    }
                }
            }
        }
        return $data;
    }

    private function detectMaliciousPatterns() {
        $input = file_get_contents('php://input');
        $malicious_keywords = [
            'base64_decode', 'eval(', 'system(', 'shell_exec(', 'passthru(', 
            'php_uname', 'popen(', 'proc_open(', 'exec(', 'document.cookie', 
            '<script', 'javascript:', 'onesec.sh', '/etc/passwd'
        ];

        foreach ($malicious_keywords as $keyword) {
            // Check URI, Query String, and Post Body
            if (stripos($_SERVER['REQUEST_URI'], $keyword) !== false || stripos($input, $keyword) !== false) {
                $this->logSecurityEvent("Malicious Pattern Detected", $keyword);
                http_response_code(400);
                die("Access Denied: Security Violation.");
            }
        }

        // 4. Anti-SEO Cloaking Guard - Check for excessive hidden links or keywords
        if (preg_match('/(display\s*:\s*none|visibility\s*:\s*hidden|opacity\s*:\s*0)/i', $input)) {
            $this->logSecurityEvent("Cloaking Attempt", "Hidden content detected in input");
            die("Security Shield: Hidden content injection blocked.");
        }
    }

    private function setSecurityHeaders() {
        // 13. Content Security Policy (CSP) - Updated to allow required CDNs and Analytics
        header("Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com https://fonts.gstatic.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net https://unpkg.com https://www.google.com https://www.gstatic.com https://www.googletagmanager.com; img-src 'self' data: https: https://www.google-analytics.com https://www.googletagmanager.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net https://unpkg.com https://www.googletagmanager.com https://www.google.com https://www.gstatic.com; connect-src 'self' https://www.google-analytics.com https://www.googletagmanager.com;");

        // 14. Clickjacking Protection
        header("X-Frame-Options: SAMEORIGIN");
        header("X-Content-Type-Options: nosniff");

        // 17. Tabnabbing Protection (handled via headers and logic)
        header("Referrer-Policy: strict-origin-when-cross-origin");

        // 20. Secure Routing Control
        header("X-Permitted-Cross-Domain-Policies: none");
    }

    private function hideInformation() {
        // 19. Information Leakage Shield
        header_remove("X-Powered-By");
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

    private function logSecurityEvent($type, $detail) {
        $log_file = __DIR__ . '/../security_log.txt';
        $timestamp = date('Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'];
        $message = "[$timestamp] [$ip] [$type] : $detail" . PHP_EOL;
        file_put_contents($log_file, $message, FILE_APPEND);
    }

    // 7. MIME Type Verification & 8. Double Extension Blocker
    public static function validateFileUpload($file) {
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];

        // 8. Double Extension Blocker
        if (preg_match('/\.[^.]+\./', $filename)) {
            return "Double extension detected.";
        }

        // 7. MIME Type Verification
        $allowed_mime = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $tmp_name);
        finfo_close($finfo);

        if (!in_array($mime, $allowed_mime)) {
            return "Invalid file type: $mime";
        }

        // 9. File Content Scanner
        $content = file_get_contents($tmp_name);
        if (preg_match('/<\?php/i', $content) || preg_match('/eval\(/i', $content)) {
            return "Malicious PHP code detected in file.";
        }

        return true;
    }
}
