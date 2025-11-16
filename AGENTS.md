# 🧠 AGENTS.md

Guía de desarrollo para agentes y contribuidores del proyecto.  
Este documento define los **estándares, convenciones y buenas prácticas** que deben seguirse para garantizar **consistencia, mantenibilidad y calidad del código**.

---

## 📘 Estructura general del proyecto

El proyecto sigue la **arquitectura de Laravel**, priorizando la separación de responsabilidades, la limpieza del código y la documentación estandarizada.

Convenciones de nombres y estructuras para los principales componentes del proyecto:

| Componente  | Convención de nombres            | Ejemplo                   |
| ----------- | -------------------------------- | ------------------------- |
| Controlador | `RecursoController`              | `UsuarioController`       |
| FormRequest | `Acción + Recurso + FormRequest` | `StoreUsuarioFormRequest` |
| Test        | `RecursoTest`                    | `UsuarioTest`             |
| Rutas       | Plural, separadas por `/`        | `/usuarios`               |


---

## ⚙️ Controladores

- **Controladores delgados:**  
  La lógica de negocio **no debe incluirse directamente en los controladores**.

- **Respuestas estandarizadas:**  
  Todos los métodos deben retornar las respuestas mediante el helper `apiResponse()`, asegurando uniformidad en la estructura de salida.

**Example:**

```php
public function index(TotalsFormRequest $request)
{
    $totals = User::getTotals($request);
    return apiResponse()->ok($totals);
}
```

---

## 🧩 Services

- La lógica de negocio, cálculos, integraciones o reglas de dominio **deben implementarse en los Services**.
- Deben ser reutilizables y desacoplados del framework.

**Example:**

```php
public static function handle(Card $card, int $amount): int
{
    $cardBalance = $card->balance ?? 0;
    // ...business logic...
    return $maxAvailableMoney;
}
```

---

## 🧾 Requests (Form Requests)

- **Validación obligatoria mediante FormRequest:**  
  No se debe validar manualmente dentro del controlador.  
  Cada endpoint debe contar con su correspondiente **FormRequest** que gestione las reglas, mensajes y autorización.

**Example:**

```php
public function rules(): array
{
    return [
        'userId' => 'required|exists:'.(new User)->getTable().',id',
    ];
}
```

---

## 🌐 Rutas (Routes)

- Las URLs deben escribirse **en plural** y separadas por **/** (no guiones).  
  Ejemplo:

  ```
  Modelo: EjemploPrueba
  Ruta: /ejemplos/pruebas
  ```

- Seguir la convención RESTful de Laravel: index, store, show, update, destroy.

**Example:**

```php
use App\Http\Controllers\UserController;
Route::get('/users/totals', [UserController::class, 'index']);
```

---

## 🗃️ Tablas y Campos

- **Nombres de tablas:** siempre en **plural** y en **inglés** (ejemplo: `users`, `products`).
- **Campos:** deben seguir el formato **camelCase** y en **inglés** (ejemplo: `fullName`, `startDate`).

---

## 📄 Documentación del código

- Usar el formato de documentación estándar de Laravel (PHPDoc).

  Ejemplo:

  ```php
  /**
   * Show the profile for a given user.
   */
  public function show(string $id): View
  {
      return view('user.profile', [
          'user' => User::findOrFail($id)
      ]);
  }
  ```

---

## 🧠 Query Builders

- Para consultas personalizadas, usar QueryBuilder cuando sea necesario.

---

## 🧪 Tests

- Cada nueva **feature** debe incluir **al menos un test de integración básico**.
- El framework de testing obligatorio es **Pest**.
- Los tests deben cubrir los principales casos de uso del endpoint o feature desarrollada.

**Example:**

```php
test('User in active state saved successfully', function () {
    $user = User::factory()->active()->create();
    expect($user->status)->toBe(UserStatus::ACTIVE->value);
});
```

---

## 🎯 Estilo y formato

- Seguir **los estándares de formato y estilo de Laravel** (PSR-12, convenciones de nombres, estructura de carpetas, etc.).
- Mantener el código **limpio, legible y desacoplado**.
- Comentar únicamente cuando sea necesario para clarificar intención, no para describir lo obvio.
