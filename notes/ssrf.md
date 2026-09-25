# Server-Side Request Forgery (SSRF)

## Definition

SSRF is a vulnerability that allows an attacker to make a server send requests on their behalf.

## Why SSRF Matters

Applications often have access to internal systems that external users cannot reach directly.

An SSRF vulnerability can allow access to:

- Internal services
- Administrative interfaces
- Cloud metadata endpoints
- Internal APIs

## Common SSRF Flow

User Input
→ Vulnerable Application
→ Server Sends Request
→ Internal Resource

## Types

### Basic SSRF

The response is returned to the attacker.

### Blind SSRF

The response is not returned, but server interaction can still be detected through logs or out-of-band techniques.

## Key Lessons Learned

1. SSRF abuses server trust.
2. Internal services are common targets.
3. Blind SSRF often requires out-of-band detection.
4. Cloud environments frequently expose metadata endpoints.
5. Input validation alone is not sufficient protection.
