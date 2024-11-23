<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property array|null $description
 * @property int|null $original_price
 * @property int|null $discount_percentage
 * @property string $image
 * @property int $active
 * @property int|null $bundle_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bundle> $bundles
 * @property-read int|null $bundles_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis active()
 * @method static \Database\Factories\AnalysisFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereBundleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Analysis withoutTrashed()
 */
	class Analysis extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property int $visible
 * @property array $name
 * @property array $address
 * @property string|null $mobile
 * @property string|null $map_url
 * @property string|null $image
 * @property int $city_id
 * @property string|null $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\User|null $creator
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch forPublic()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch whereVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Branch withoutTrashed()
 */
	class Branch extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property array $description
 * @property string $logo
 * @property string $primary_color
 * @property string $secondary_color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $translations
 * @method static \Database\Factories\BrandFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereSecondaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property array $description
 * @property int|null $original_price
 * @property int|null $discount_percentage
 * @property string $image
 * @property int $active
 * @property int $is_home_service
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Analysis> $analyses
 * @property-read int|null $analyses_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle active()
 * @method static \Database\Factories\BundleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereIsHomeService($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bundle withoutTrashed()
 */
	class Bundle extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property string $slug
 * @property array $description
 * @property string $icon
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $services
 * @property-read int|null $services_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category active()
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $active
 * @property string $code
 * @property string $country_code
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\District> $districts
 * @property-read int|null $districts_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $order
 * @property string $code
 * @property string $mobile_code
 * @property string|null $timezone
 * @property string|null $currency
 * @property string|null $flag
 * @property array $name
 * @property array $full_name
 * @property array $nationality
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country mobileCodeCountries()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country visibleVenueCountries()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereMobileCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\User|null $creator
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Course withoutTrashed()
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $active_at
 * @property string $country_code
 * @property int $city_id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Country|null $country
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereActiveAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereUpdatedAt($value)
 */
	class District extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $before
 * @property string|null $after
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Category|null $category
 * @method static \Database\Factories\ImprovementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Improvement withoutTrashed()
 */
	class Improvement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property \App\Enums\LeadStatus $status
 * @property int|null $service_id
 * @property int|null $category_id
 * @property string $name
 * @property string $mobile
 * @property string $city
 * @property string|null $message
 * @property string|null $image
 * @property string|null $agent_id
 * @property string|null $creator_id
 * @property string $utm_source
 * @property string|null $utm_medium
 * @property string|null $utm_campaign
 * @property string|null $utm_term
 * @property \Illuminate\Support\Carbon|null $deadline_at
 * @property \Illuminate\Support\Carbon|null $followed_at
 * @property \Illuminate\Support\Carbon|null $done_at
 * @property \Illuminate\Support\Carbon|null $closed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LeadAction> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\User|null $agent
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Course|null $course
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $customer
 * @property-read \App\Models\Service|null $service
 * @property-read mixed $translations
 * @method static \Database\Factories\LeadFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereDeadlineAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereDoneAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereFollowedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereUtmCampaign($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereUtmMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereUtmSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead whereUtmTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Lead withoutTrashed()
 */
	class Lead extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $lead_id
 * @property string|null $agent_id
 * @property \App\Enums\LeadStatus|null $from_status
 * @property \App\Enums\LeadStatus $to_status
 * @property \Illuminate\Support\Carbon|null $deadline_at
 * @property \Illuminate\Support\Carbon|null $deadlined_at
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $agent
 * @property-read \App\Models\Lead $lead
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereDeadlineAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereDeadlinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereFromStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereLeadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereToStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LeadAction whereUpdatedAt($value)
 */
	class LeadAction extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $title
 * @property string $slug
 * @property array|null $content
 * @property array|null $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $translations
 * @method static \Database\Factories\NewsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News withoutTrashed()
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property string|null $image
 * @property string|null $icon
 * @property int|null $original_price
 * @property int|null $new_price
 * @property int|null $discount_percentage
 * @property string|null $code
 * @property array|null $description
 * @property int $active
 * @property \App\Enums\OfferStatus|null $status
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $expiry_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OfferDetail> $details
 * @property-read int|null $details_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer active()
 * @method static \Database\Factories\OfferFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereNewPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer withoutTrashed()
 */
	class Offer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $offer_id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offers
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDetail whereUpdatedAt($value)
 */
	class OfferDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $country_code
 * @property \App\Enums\PaymentProcessor $processor
 * @property string|null $ip
 * @property string|null $transaction_id
 * @property string|null $invoice_id
 * @property string $currency
 * @property int $amount
 * @property string|null $amount_format
 * @property int|null $fee
 * @property string|null $fee_format
 * @property string|null $receipt_src
 * @property string|null $type
 * @property string|null $company
 * @property string|null $name
 * @property string|null $number
 * @property string|null $message
 * @property string|null $transaction_url
 * @property string|null $description
 * @property array|null $metadata
 * @property string|null $reference
 * @property string|null $verifier_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property-read \App\Models\User|null $verifier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAmountFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereFeeFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereProcessor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereReceiptSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereTransactionUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereVerifierId($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, PermissionModel> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RoleModel> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PermissionModel withoutRole($roles, $guard = null)
 */
	class PermissionModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property \App\Enums\PostStatus $status
 * @property string $title
 * @property string $slug
 * @property string|null $image
 * @property string $summary
 * @property string $content
 * @property string|null $author_id
 * @property \Illuminate\Support\Carbon|null $tobe_published_at
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property \Illuminate\Support\Carbon|null $hidden_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User|null $author
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\PostFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post forPublic()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereHiddenAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTobePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post withoutTrashed()
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PermissionModel> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoleModel withoutPermission($permissions)
 */
	class RoleModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property array $name
 * @property array $description
 * @property string $icon
 * @property int|null $category_id
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Service> $doctors
 * @property-read int|null $doctors_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service active()
 * @method static \Database\Factories\ServiceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service withoutTrashed()
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \App\Enums\PostStatus $status
 * @property string $slug
 * @property string|null $author_id
 * @property \Illuminate\Support\Carbon|null $tobe_published_at
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property \Illuminate\Support\Carbon|null $hidden_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $author
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereHiddenAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereTobePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag withoutTrashed()
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property array $name
 * @property array|null $experience
 * @property array|null $position
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $services
 * @property-read int|null $services_count
 * @property-read mixed $translations
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team withoutTrashed()
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property int|null $order
 * @property int $active
 * @property string $name
 * @property \App\Enums\Gender|null $gender
 * @property string|null $email
 * @property string $mobile_code
 * @property int $mobile
 * @property string $locale_mobile
 * @property string|null $username
 * @property string|null $password
 * @property string|null $avatar
 * @property string $locale
 * @property string $currency
 * @property string $timezone
 * @property int $mono
 * @property int $dark
 * @property int $is_admin
 * @property int $is_agent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PermissionModel> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RoleModel> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User active($active = true)
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User findByEmailOrMobile(?string $email = null, ?string $mobile = null, ?string $mobile_code = '966')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User findForLogin(string $identifier, ?string $mobile_code)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User super($super = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLocaleMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMobileCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMono($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Filament\Models\Contracts\HasAvatar, \Illuminate\Contracts\Translation\HasLocalePreference, \Spatie\EloquentSortable\Sortable {}
}

