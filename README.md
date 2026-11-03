# Tavaan Engine — Log

> **گزارش ساختاریافته** — موتور Log در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.log` |
| نام | `Log` |
| عنوان فارسی | گزارش ساختاریافته |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Log` |
| نوع | `engine` |
| Facade | `Log` (accessor: `log`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Log\Contracts\FormatterInterface`
- `Tavaan\Engine\Log\Contracts\HandlerInterface`
- `Tavaan\Engine\Log\Contracts\LogLevel`
- `Tavaan\Engine\Log\Contracts\LoggerInterface`
- `Tavaan\Engine\Log\Contracts\ProcessorInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Log\Exceptions\LogException`

## Facadeها

- `Tavaan\Engine\Log\Facades\Log`

## کلاس‌های اصلی

- `src/Buffer.php`
- `src/Formatters/JsonFormatter.php`
- `src/Formatters/LineFormatter.php`
- `src/Handlers/ArrayHandler.php`
- `src/Handlers/FileHandler.php`
- `src/Handlers/NullHandler.php`
- `src/Handlers/RotatingFileHandler.php`
- `src/Handlers/StderrHandler.php`
- `src/Handlers/StreamHandler.php`
- `src/LogLevel.php`
- `src/LogManager.php`
- `src/LogRecord.php`
- `src/LogServiceProvider.php`
- `src/Logger.php`
- `src/Processors/BacktraceProcessor.php`
- `src/Processors/EnvironmentProcessor.php`
- `src/Processors/IdentityProcessor.php`
- `src/Processors/MaskProcessor.php`
- `src/Processors/MemoryProcessor.php`
- `src/Processors/RuntimeProcessor.php`
- ... و 1 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Log\LogServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/log.php`
- کلید: `log`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Log.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Log`** (این مخزن) | موتور Log |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
