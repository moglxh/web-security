# PortSwigger SSRF Labs

## Objective

Practice identifying and exploiting SSRF vulnerabilities in controlled lab environments.

## Topics Covered

- Basic SSRF
- Blind SSRF
- SSRF with filter bypasses
- SSRF against internal applications
- SSRF and out-of-band detection

## Observations

1. Many SSRF vulnerabilities originate from URL-fetching functionality.
2. Internal applications are often reachable from the vulnerable server.
3. Blind SSRF requires different detection methods than reflected SSRF.
4. DNS interactions may reveal successful exploitation.
5. SSRF impact depends heavily on the environment being targeted.

## Skills Practiced

- Request analysis
- HTTP parameter testing
- Burp Suite usage
- Collaborator-based detection
- Attack path analysis
