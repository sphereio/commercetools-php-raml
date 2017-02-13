<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class HydratorGenerator {
    protected static $types = [
       PageQueryResponse::class => PageQueryResponse::class,
       Update::class => Update::class,
       UpdateAction::class => UpdateAction::class,
       UpdateActionCollection::class => UpdateActionCollection::class,
       Resource::class => Resource::class,
       LocalizedString::class => LocalizedString::class,
       Reference::class => Reference::class,
       ReferenceCollection::class => ReferenceCollection::class,
       ReferenceTypeId::class => ReferenceTypeId::class,
       Asset::class => Asset::class,
       AssetCollection::class => AssetCollection::class,
       AssetSource::class => AssetSource::class,
       AssetSourceCollection::class => AssetSourceCollection::class,
       AssetDimensions::class => AssetDimensions::class,
       AssetDraft::class => AssetDraft::class,
       AssetDraftCollection::class => AssetDraftCollection::class,
       Address::class => Address::class,
       AddressCollection::class => AddressCollection::class,
       GeoJson::class => GeoJson::class,
       GeoJsonPoint::class => GeoJsonPoint::class,
       Category::class => Category::class,
       CategoryCollection::class => CategoryCollection::class,
       CategoryDraft::class => CategoryDraft::class,
       CategoryReference::class => CategoryReference::class,
       CategoryReferenceCollection::class => CategoryReferenceCollection::class,
       CategoryPagedQueryResponse::class => CategoryPagedQueryResponse::class,
       CategoryUpdate::class => CategoryUpdate::class,
       CategoryUpdateAction::class => CategoryUpdateAction::class,
       CategoryUpdateActionCollection::class => CategoryUpdateActionCollection::class,
       CategoryChangeName::class => CategoryChangeName::class,
       CategoryChangeSlug::class => CategoryChangeSlug::class,
       CategorySetDescription::class => CategorySetDescription::class,
       CategoryChangeParent::class => CategoryChangeParent::class,
       CategoryChangeOrderHint::class => CategoryChangeOrderHint::class,
       CategorySetExternalId::class => CategorySetExternalId::class,
       CategorySetMetaTitle::class => CategorySetMetaTitle::class,
       CategorySetMetaKeywords::class => CategorySetMetaKeywords::class,
       CategorySetMetaDescription::class => CategorySetMetaDescription::class,
       CategorySetCustomType::class => CategorySetCustomType::class,
       CategorySetCustomField::class => CategorySetCustomField::class,
       CategoryAddAsset::class => CategoryAddAsset::class,
       CategoryRemoveAsset::class => CategoryRemoveAsset::class,
       CategoryChangeAssetOrder::class => CategoryChangeAssetOrder::class,
       CategoryChangeAssetName::class => CategoryChangeAssetName::class,
       CategorySetAssetDescription::class => CategorySetAssetDescription::class,
       CategorySetAssetTags::class => CategorySetAssetTags::class,
       CategorySetAssetSources::class => CategorySetAssetSources::class,
       CategorySetAssetCustomType::class => CategorySetAssetCustomType::class,
       CategorySetAssetCustomField::class => CategorySetAssetCustomField::class,
       Channel::class => Channel::class,
       ChannelCollection::class => ChannelCollection::class,
       ChannelDraft::class => ChannelDraft::class,
       ChannelRoleEnum::class => ChannelRoleEnum::class,
       MessageConfiguration::class => MessageConfiguration::class,
       AttributeBooleanType::class => AttributeBooleanType::class,
       AttributeConstraintEnum::class => AttributeConstraintEnum::class,
       AttributeDateTimeType::class => AttributeDateTimeType::class,
       AttributeDateType::class => AttributeDateType::class,
       AttributeTimeType::class => AttributeTimeType::class,
       AttributeDefinition::class => AttributeDefinition::class,
       AttributeDefinitionCollection::class => AttributeDefinitionCollection::class,
       AttributeEnumType::class => AttributeEnumType::class,
       AttributeLocalizedEnumType::class => AttributeLocalizedEnumType::class,
       AttributeLocalizedEnumValue::class => AttributeLocalizedEnumValue::class,
       AttributeMoneyType::class => AttributeMoneyType::class,
       AttributeNestedType::class => AttributeNestedType::class,
       AttributeNumberType::class => AttributeNumberType::class,
       AttributePlainEnumValue::class => AttributePlainEnumValue::class,
       AttributeReferenceType::class => AttributeReferenceType::class,
       AttributeSetType::class => AttributeSetType::class,
       AttributeTextType::class => AttributeTextType::class,
       AttributeType::class => AttributeType::class,
       ProductType::class => ProductType::class,
       ProductTypeCollection::class => ProductTypeCollection::class,
       ProductTypeDraft::class => ProductTypeDraft::class,
       ProductTypeReference::class => ProductTypeReference::class,
       ProductTypeReferenceCollection::class => ProductTypeReferenceCollection::class,
       ProductTypePagedQueryResponse::class => ProductTypePagedQueryResponse::class,
       TextInputHint::class => TextInputHint::class,
       Project::class => Project::class,
       ReviewRatingStatistics::class => ReviewRatingStatistics::class,
       TypeReference::class => TypeReference::class,
       TypeReferenceCollection::class => TypeReferenceCollection::class,
       Type::class => Type::class,
       TypeCollection::class => TypeCollection::class,
       FieldDefinition::class => FieldDefinition::class,
       FieldDefinitionCollection::class => FieldDefinitionCollection::class,
       FieldType::class => FieldType::class,
       CustomFields::class => CustomFields::class,
       CustomFieldsCollection::class => CustomFieldsCollection::class,
       CustomFieldsDraft::class => CustomFieldsDraft::class,
    ];
        
    public function getHydratorClass($className)
    {
        $hydratorClass = null;
        if (isset(self::$types[$className])) {
            $hydratorClass = self::$types[$className];
        }
        return $hydratorClass;
    }
}
