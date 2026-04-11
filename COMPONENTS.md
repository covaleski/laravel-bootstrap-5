# Components Reference

## Alert

Bootstrap reference: <https://getbootstrap.com/docs/5.3/components/alerts>.

### Example

```html
<x-bs::alert variant="success" dismissible>
    This is an important message.
</x-bs::alert>
```

### Attributes

| Attribute | Default | Description |
| --- | --- | --- |
| `dismissible` | Absent | Adds a close button to dismiss the alert. |
| `variant` | `"primary"` | Sets the alert colors. |

## Form Control

Bootstrap reference: <https://getbootstrap.com/docs/5.3/forms/form-control/>.

### Example

```html
<div class="mb-2">
    <x-bs::form.control
        label="Notes"
        type="textarea"
        rows="3"
        name="notes"
        help="Put any arbitrary information here."/>
</div>
```

### Attributes

| Attribute | Default | Description |
| --- | --- | --- |
| `disabled` | Absent | Disables field input. |
| `help` | None | Sets the field help text. |
| `id` | Generated | Sets the field ID. |
| `label` | None | Set the field label. |
| `large` | Absent | Makes the field larger. |
| `plaintext` | Absent | foobar |
| `readonly` | Absent | Makes the field content read-only. |
| `small` | Absent | Makes the field smaller. |
| `type` | `"text"` | Sets the field type (`"textarea"` turns it into a textarea element). |
| `value` | Empty | Sets the field initial value. |
