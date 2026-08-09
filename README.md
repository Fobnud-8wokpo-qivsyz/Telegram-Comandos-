# Telegram-Comandos-

**Catálogo de comandos, plantillas y esquemas para bots de Telegram.**  
Listo para practicar: copia un ejemplo, pon tu token y prueba.

---

## Para qué sirve este repo

| Uso | Qué encuentras aquí |
|-----|---------------------|
| Aprender comandos | Esquemas `/start`, `/help`, teclados, callbacks |
| Arrancar un bot | Plantillas PHP y Node listas para adaptar |
| Proxies y MTProto | Notas de MadelineProto, SOCKS5, HTTP |
| Referencia rápida | Diagramas, filtros y configs de ejemplo |

**No es** un bot en producción único. Es tu **cuaderno de práctica** de comandos y patrones.

---

## Relación con tus otros repos

| Repo | Rol |
|------|-----|
| **Telegram-Comandos-** (este) | Comandos y plantillas |
| [Api-sGoogle](https://github.com/Fobnud-8wokpo-qivsyz/Api-sGoogle) | Hub de APIs (Google, Notion, samples) |
| [Extracto-API-s-Telegram-Google-Bots](https://github.com/Fobnud-8wokpo-qivsyz/Extracto-API-s-Telegram-Google-Bots) | Ejemplos **ejecutables** (Node) |

---

## Estructura recomendada (práctica)

```
Telegram-Comandos-/
├── README.md                 ← Estás aquí
├── docs/
│   └── INDICE.md             ← Mapa de archivos sueltos
├── practicas/
│   ├── 01-hola-bot.php       ← Bot mínimo PHP (webhook)
│   ├── 02-comandos-basicos.md
│   └── .env.example
├── javascript/               ← Scripts JS existentes
├── Ventanas bot/             ← UI / ventanas
├── bot apu/                  ← Experimentos de bot
└── .github/                  ← Actions + Dependabot
```

Los archivos sueltos en la raíz (proxies, notas, licencias) se van clasificando; usa `docs/INDICE.md` para ubicarlos.

---

## Cómo practicar (3 pasos)

1. **Token**  
   Habla con [@BotFather](https://t.me/BotFather) → `/newbot` → copia el token.

2. **Copia el ejemplo**  
   ```bash
   git clone https://github.com/Fobnud-8wokpo-qivsyz/Telegram-Comandos-.git
   cd Telegram-Comandos-
   cp practicas/.env.example practicas/.env
   # Edita practicas/.env y pega TELEGRAM_BOT_TOKEN=...
   ```

3. **Prueba**  
   - PHP: sube `practicas/01-hola-bot.php` a un hosting con HTTPS y configura el webhook.  
   - O usa el repo **Extracto-...** con Node (`npm start`) para practicar en local con long polling.

---

## Comandos básicos a dominar

| Comando | Qué hace |
|---------|----------|
| `/start` | Bienvenida + teclado |
| `/help` | Lista de comandos |
| `/stop` | Cierra sesión de conversación (si aplica) |
| Texto libre | Respuesta por defecto |

Más detalle en `practicas/02-comandos-basicos.md`.

---

## Seguridad

- **Nunca** subas tokens reales al repo. Usa `.env` (y `.gitignore`).
- Dependabot está activo en `.github/`.
- Proxies y MTProto: solo para aprendizaje; respeta los términos de Telegram.

---

## Licencia

Ver archivos `LICENSE` / `LICENCIA` en el repo.

---

**Próximo paso sugerido:** abrir `practicas/01-hola-bot.php`, poner tu token y hacer que responda `/start`.  
Luego conecta ideas con [VIVIGEOSILHA](https://github.com/Fobnud-8wokpo-qivsyz/VIVIGEOSILHA) (ej. bot que envíe el link de Experiencia Personalizada).
