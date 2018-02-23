## Table of contents

- [SessionInterface (interface)](#interface-sessioninterface)
- [\Hichxm\SessionManager\SessionManager](#class-hichxmsessionmanagersessionmanager)
- [\Hichxm\SessionManager\Session\PHP_SESSION_MANAGER](#class-hichxmsessionmanagersessionphp_session_manager)

<hr />

### Interface: SessionInterface

> Interface SessionInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>SessionInterface constructor.</em> |
| public | <strong>get(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string/array/int/boolean/null</em><br /><em>Get value of $key</em> |
| public | <strong>set(</strong><em>string</em> <strong>$key</strong>, <em>string/array/int/boolean</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Set value of $key</em> |
| public | <strong>start()</strong> : <em>void</em><br /><em>Start session.</em> |
| public | <strong>stop()</strong> : <em>void</em><br /><em>Stop current session.</em> |
| public | <strong>unset(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Delete value of $key</em> |

<hr />

### Class: \Hichxm\SessionManager\SessionManager

> Class Session

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SessionInterface](#interface-sessioninterface)</em> <strong>$SessionInterface</strong>)</strong> : <em>void</em><br /><em>SessionManager constructor.</em> |
| public | <strong>get(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string/array/int/boolean/null</em><br /><em>Get value of $key</em> |
| public | <strong>set(</strong><em>string</em> <strong>$key</strong>, <em>string/array/int/boolean</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Set value of $key</em> |
| public | <strong>start()</strong> : <em>void</em><br /><em>Start session.</em> |
| public | <strong>stop()</strong> : <em>void</em><br /><em>Stop current session.</em> |
| public | <strong>unset(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Delete value of $key</em> |

<hr />

### Class: \Hichxm\SessionManager\Session\PHP_SESSION_MANAGER

> Class PHP_SESSION_MANAGER

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>SessionInterface constructor.</em> |
| public | <strong>get(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string/array/int/boolean/null</em><br /><em>Get value of $key</em> |
| public | <strong>id()</strong> : <em>string</em><br /><em>Return current session id.</em> |
| public | <strong>set(</strong><em>string</em> <strong>$key</strong>, <em>string/array/int/boolean</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Set value of $key</em> |
| public | <strong>start()</strong> : <em>void</em><br /><em>Start session.</em> |
| public | <strong>stop()</strong> : <em>void</em><br /><em>Stop current session.</em> |
| public | <strong>unset(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Delete value of $key</em> |

*This class implements [\SessionInterface](#interface-sessioninterface)*

