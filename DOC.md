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
| public | <strong>offsetExists(</strong><em>mixed</em> <strong>$offset</strong>)</strong> : <em>boolean true on success or false on failure. </p> <p> The return value will be casted to boolean if non-boolean was returned.</em><br /><em>Whether a offset exists</em> |
| public | <strong>offsetGet(</strong><em>mixed</em> <strong>$offset</strong>)</strong> : <em>mixed Can return all value types.</em><br /><em>Offset to retrieve</em> |
| public | <strong>offsetSet(</strong><em>mixed</em> <strong>$offset</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Offset to set</em> |
| public | <strong>offsetUnset(</strong><em>mixed</em> <strong>$offset</strong>)</strong> : <em>void</em><br /><em>Offset to unset</em> |
| public | <strong>set(</strong><em>string</em> <strong>$key</strong>, <em>string/array/int/boolean</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Set value of $key</em> |
| public | <strong>start()</strong> : <em>void</em><br /><em>Start session.</em> |
| public | <strong>stop()</strong> : <em>void</em><br /><em>Stop current session.</em> |
| public | <strong>unset(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Delete value of $key</em> |

*This class implements \ArrayAccess*

<hr />

### Class: \Hichxm\SessionManager\Session\PHP_SESSION_MANAGER

> Class PHP_SESSION_MANAGER

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>SessionInterface constructor.</em> |
| public | <strong>get(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string/array/int/boolean/null</em><br /><em>Get value of $key</em> |
| public | <strong>id()</strong> : <em>string</em><br /><em>Return current session id.</em> |
| public | <strong>set(</strong><em>string</em> <strong>$key</strong>, <em>string/array/int/boolean</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Set value of $key</em> |
| public | <strong>start()</strong> : <em>void</em><br /><em>Start session.</em> |
| public | <strong>stop()</strong> : <em>void</em><br /><em>Stop current session.</em> |
| public | <strong>unset(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Delete value of $key</em> |

*This class implements [\SessionInterface](#interface-sessioninterface)*

