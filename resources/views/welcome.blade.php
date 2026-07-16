<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Anchor API') }}</title>
    <meta name="robots" content="noindex">
    <style>
        :root {
            color-scheme: light dark;
            --bg-1: #f4f6f8;
            --bg-2: #e7ebef;
            --card: #ffffff;
            --border: #dfe4e9;
            --text: #16202a;
            --muted: #5b6b7a;
            --accent: #0f6e5f;
            --accent-soft: #e3f3ef;
            --mono-bg: #f1f4f6;
            --shadow: 0 20px 60px -25px rgba(15, 30, 45, 0.35);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg-1: #0b1116;
                --bg-2: #0f1720;
                --card: #131c24;
                --border: #223038;
                --text: #e7edf2;
                --muted: #8fa1ac;
                --accent: #35c9a5;
                --accent-soft: #123028;
                --mono-bg: #0c1418;
                --shadow: 0 20px 60px -20px rgba(0, 0, 0, 0.6);
            }
        }

        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: var(--text);
            background: radial-gradient(circle at 20% 20%, var(--bg-2), var(--bg-1) 60%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .card {
            width: 100%;
            max-width: 640px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: var(--shadow);
            padding: 40px 40px 32px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand svg {
            flex-shrink: 0;
            color: var(--accent);
        }

        .brand h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 650;
            letter-spacing: -0.01em;
        }

        .tagline {
            margin: 6px 0 0;
            color: var(--muted);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .status {
            margin-top: 28px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            box-shadow: 0 0 0 4px color-mix(in srgb, var(--accent) 20%, transparent);
        }

        .meta {
            margin-top: 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 14px;
        }

        .meta div {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 14px;
        }

        .meta span {
            display: block;
        }

        .meta .label {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .meta .value {
            font-size: 0.92rem;
            font-weight: 600;
            font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
        }

        .links {
            margin-top: 28px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .links a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 16px;
            border-radius: 10px;
            border: 1px solid var(--border);
            color: var(--text);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            transition: border-color 0.15s ease, transform 0.15s ease;
        }

        .links a:hover {
            border-color: var(--accent);
            transform: translateY(-1px);
        }

        .links a.primary {
            background: var(--accent);
            border-color: var(--accent);
            color: #ffffff;
        }

        footer {
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 0.78rem;
        }
    </style>
</head>
<body>
    <main class="card">
        <div class="brand">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle cx="12" cy="5" r="2.25" stroke="currentColor" stroke-width="1.6"/>
                <path d="M12 7.25V15M12 15C12 18.5 9.5 20 6 19M12 15C12 18.5 14.5 20 18 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M4.5 12H7.2M16.8 12H19.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
            <div>
                <h1>{{ config('app.name', 'Anchor API') }}</h1>
                <p class="tagline">Laravel API backend for the Anchor Technologies e-commerce platform.</p>
            </div>
        </div>

        <span class="status"><span class="dot"></span> Operational</span>

        <div class="meta">
            <div>
                <span class="label">Environment</span>
                <span class="value">{{ config('app.env') }}</span>
            </div>
            <div>
                <span class="label">Laravel</span>
                <span class="value">v{{ app()->version() }}</span>
            </div>
            <div>
                <span class="label">PHP</span>
                <span class="value">{{ PHP_VERSION }}</span>
            </div>
        </div>

        <div class="links">
            <a class="primary" href="/api/v1">API base</a>
            <a href="/up">Health check</a>
        </div>

        <footer>
            This is a backend service — there is no user interface here. Frontend
            requests should go through the <code>anchor-website</code> app.
        </footer>
    </main>
</body>
</html>
