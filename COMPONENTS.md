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

## Form Check

Bootstrap reference: <https://getbootstrap.com/docs/5.3/forms/checks-radios>.

### Example

```html
<x-bs::form.check label="Option A" name="check-value[]" switch/>
<x-bs::form.check label="Option B" name="check-value[]" switch/>
<x-bs::form.check label="Option C" name="check-value[]" switch checked/>
<x-bs::form.check label="Option D" name="check-value[]" switch disabled/>
<x-bs::form.check label="Option E" name="check-value[]" switch checked disabled/>
```

### Attributes

| Attribute | Default | Description |
| --- | --- | --- |
| `checked` | Absent | Makes the field checked by default. |
| `disabled` | Absent | Disables field checking/unchecking. |
| `id` | Generated | Sets the field ID. |
| `label` | None | Sets the field label. |
| `radio` | Absent | Makes the field a radio. |
| `switch` | Absent | Styles the field as a switch. |

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
| `label` | None | Sets the field label. |
| `large` | Absent | Makes the field larger. |
| `plaintext` | Absent | foobar |
| `readonly` | Absent | Makes the field content read-only. |
| `small` | Absent | Makes the field smaller. |
| `type` | `"text"` | Sets the field type (`"textarea"` turns it into a textarea element). |
| `value` | Empty | Sets the field initial value. |

## Form Range

Bootstrap reference: <https://getbootstrap.com/docs/5.3/forms/range>.

### Example

```html
<x-bs::form.range
    label="Volume"
    min="0"
    max="100"
    step="20"
    value="20"/>
```

### Attributes

| Attribute | Default | Description |
| --- | --- | --- |
| `disabled` | Absent | Disables field input. |
| `help` | None | Sets the field help text. |
| `id` | None | Sets the field ID. |
| `label` | None | Sets the field label text. |

## Form Select

Bootstrap reference: <https://getbootstrap.com/docs/5.3/forms/select>.

### Example

```html
<x-bs::form.select
    label="Subscription"
    help="Select one of the available options.">
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</x-bs::form.select>
```

### Attributes

| Attribute | Default | Description |
| --- | --- | --- |
| `disabled` | Absent | Disables field input. |
| `help` | None | Sets the field help text. |
| `id` | None | Sets the field ID. |
| `label` | None | Sets the field label text. |
| `large` | Absent | Makes the field larger. |
| `multiple` | Absent | Allows selecting multiple options. |
| `placeholder` | None | Sets the select field placeholder. |
| `small` | Absent | Makes the field smaller. |
