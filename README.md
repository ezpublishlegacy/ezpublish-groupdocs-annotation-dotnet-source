# Groupdocs Annotation for .NET
============================

GroupDocs Annotation for .NET plugin for ezPublish

With GroupDocs Annotation for .NET plugin for ezPublish you can easily view on [annotate on PDF's](http://groupdocs.com/apps/Annotation), Word documents, Excel documents, Powerpoint documents and more with the GroupDocs Annotation tool, directly from within your ezPublish website.

###Plugin Manual Installation Instructions:
1. "groupdocsAnnotationNet" module contain "design, modules, setting", so unzip it into "extentions" directory, so parent directory is "groupdocsAnnotation"
2. Open file: "site/settings/override/site.ini.append.php" and add "ActiveExtensions[]=groupdocsAnnotationNet" under "[ExtensionSettings]"
3. Go to Admin > Setup > Extentions and checkbox where "groupdocsAnnotation" must be ticked
4. Then go to - Setup > Extentions and press "Regenerate autoloaded arrays for extentions" in the bottom
5. Grant permissions in admin go to - User Accounts > Roles and policies > Anonymous => Edit Role and if "groupdocsAnnotationNet" isn't available in the list press - New Policy > choose Module: groupdocsAnnotationNet > Grant access to all functions > Save
6. Go to Setup and press "Clear all caches"


###[Sign, Manage, Annotate, Assemble, Compare and Convert Documents with GroupDocs](http://groupdocs.com)
* [Annotate PDF, Word, Excel, Powerpoint and Images with GroupDocs.Annotation for .NET Library](http://groupdocs.com/dot-net/document-annotation-library)
* [See GroupDocs Annotation for .NET plugin for ez Publish CMS](https://github.com/groupdocs/ezpublish-groupdocs-annotation-dotnet)

###Created by [GroupDocs Marketplace Team](http://groupdocs.com/marketplace/).