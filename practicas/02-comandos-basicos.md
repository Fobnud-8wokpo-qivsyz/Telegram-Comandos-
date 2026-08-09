# Práctica 02 — Comandos básicos

## Objetivo
Diseñar un mapa de comandos antes de codificar.

## Plantilla de comandos

```
/start   → Bienvenida + teclado
/help    → Lista de comandos
/signo   → (opcional) pedir fecha y responder signo
/prompt  → (opcional) link a Experiencia Personalizada VIVIGEOSILHA
/about   → Qué es este bot
```

## Flujo recomendado

1. Usuario escribe `/start`
2. Bot responde con texto corto + botones
3. Cada botón o comando tiene **una** responsabilidad
4. Texto libre → mensaje de ayuda (“no entiendo, usa /help”)

## Checklist de práctica

- [ ] Bot responde a `/start`
- [ ] Bot responde a `/help`
- [ ] Token solo en `.env` o variable de entorno
- [ ] Webhook en HTTPS (PHP) o long polling (Node en Extracto-...)
- [ ] Mensaje de error amable si el comando no existe

## Enlace útil

- Web del proyecto: https://fobnud-8wokpo-qivsyz.github.io/VIVIGEOSILHA/
- Experiencia personalizada: .../experiencia-personalizada.html
