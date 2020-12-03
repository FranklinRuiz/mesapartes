import { Class } from "../utility-types/dist/index";
import Bookmark from './models/Bookmark';
import Comment from './models/comments/Comment';
import TextLine from './models/TextLine';
import FormField, { FormFieldName } from './models/form-fields/FormField';
import { ToolbarItem } from './models/ToolbarItem';
import InkAnnotation from './models/annotations/InkAnnotation';
import OutlineElement from './models/OutlineElement';
import TextAnnotation from './models/annotations/TextAnnotation';
import PageInfo from './models/PageInfo';
import ViewState from './models/ViewState';
import InstantClient from './models/InstantClient';
import TextMarkupAnnotation from './models/annotations/TextMarkupAnnotation';
import StampAnnotation from './models/annotations/StampAnnotation';
import ImageAnnotation from './models/annotations/ImageAnnotation';
import { List, Map } from "../immutable/dist/immutable-nonambient";
import { PrintModeType } from './enums/PrintMode';
import { Point, Rect } from './models/geometry';
import { AnnotationPreset } from './models/AnnotationPreset';
import { ExportPDFFlags } from './lib/Backend';
import Annotation, { ID } from './models/annotations/Annotation';
import CustomOverlayItem, { CustomOverlayItemID } from './models/CustomOverlayItem';
import SearchResult from './models/search/SearchResult';
import SearchState from './models/search/SearchState';
import { IsEditableAnnotationCallback } from './models/IsEditableAnnotationCallback';
import { DocumentOperation } from './models/DocumentOperation';
import { CustomRenderers } from './models/CustomRenderers';
import { IsEditableCommentCallback } from './models/IsEditableCommentCallback';
import { TwoStepSignatureCallback } from './models/digital-signatures/TwoStepSignatureCallback';
import { SignaturePreparationData } from './models/digital-signatures/SignaturePreparationData';
import { SignaturesInfo } from './models/digital-signatures/SignaturesInfo';
import { SigningServiceData } from './models/digital-signatures/SigningServiceData';
import { SearchPatternType } from './enums/SearchPattern';
import { SearchTypeType } from './enums/SearchType';
import { RedactionAnnotationPreset } from './models/RedactionAnnotationPreset';
import { Change } from './models/Change';
import { InstantID } from './models/InstantID';
declare type DeprecatedEventType = 'annotations.onPress' | 'textLine.onPress' | 'page.onPress';
declare type EventType = 'viewState.change' | 'viewState.currentPageIndex.change' | 'viewState.zoom.change' | 'annotationPresets.update' | 'annotations.load' | 'annotations.change' | 'annotations.create' | 'annotations.update' | 'annotations.delete' | 'annotations.press' | 'annotations.willSave' | 'annotations.didSave' | 'annotations.focus' | 'annotations.blur' | 'bookmarks.change' | 'bookmarks.willSave' | 'bookmarks.didSave' | 'bookmarks.load' | 'bookmarks.create' | 'bookmarks.update' | 'bookmarks.delete' | 'comments.change' | 'comments.willSave' | 'comments.didSave' | 'comments.load' | 'comments.create' | 'comments.update' | 'comments.delete' | 'document.change' | 'document.saveStateChange' | 'formFieldValues.update' | 'formFieldValues.willSave' | 'formFieldValues.didSave' | 'formFields.load' | 'formFields.change' | 'formFields.create' | 'formFields.update' | 'formFields.delete' | 'formFields.willSave' | 'formFields.didSave' | 'forms.willSubmit' | 'forms.didSubmit' | 'inkSignatures.create' | 'inkSignatures.update' | 'inkSignatures.delete' | 'inkSignatures.change' | 'instant.connectedClients.change' | 'textSelection.change' | 'annotationSelection.change' | 'page.press' | 'textLine.press' | 'search.stateChange' | 'search.termChange';
declare type ViewStateSetter = (currentState: ViewState) => ViewState;
declare type ToolbarItemsSetter = (currentState: ToolbarItem[]) => ToolbarItem[];
declare type InkSignaturesSetter = (inkAnnotations: List<InkAnnotation>) => List<InkAnnotation>;
declare type SearchStateSetter = (currentState: SearchState) => SearchState;
declare type AnnotationPresetsSetter = (currentState: {
    [annotationPresetId: string]: AnnotationPreset;
}) => {
    [annotationPresetId: string]: AnnotationPreset;
};
declare type StampAnnotationTemplatesSetter = (currentState: Array<StampAnnotation | ImageAnnotation>) => Array<StampAnnotation | ImageAnnotation>;
export default class Instance {
    totalPageCount: number;
    pageInfoForIndex: (pageIndex: number) => PageInfo | null | undefined;
    textLinesForPageIndex: (pageIndex: number) => Promise<List<TextLine>>;
    getMarkupAnnotationText: (annotation: TextMarkupAnnotation) => Promise<string>;
    getTextFromRects: (pageIndex: number, rects: List<Rect>) => Promise<string>;
    currentZoomLevel: number;
    maximumZoomLevel: number;
    minimumZoomLevel: number;
    connectedClients: Map<string, InstantClient>;
    addEventListener: (action: EventType | DeprecatedEventType, listener: Function) => void;
    removeEventListener: (action: EventType | DeprecatedEventType, listener: Function) => void;
    jumpToRect: (pageIndex: number, rect: Rect) => void;
    jumpAndZoomToRect: (pageIndex: number, rect: Rect) => void;
    transformContentClientToPageSpace: <T extends Rect | Point>(rectOrPoint: T, pageIndex: number) => T;
    transformContentPageToClientSpace: <T extends Rect | Point>(rectOrPoint: T, pageIndex: number) => T;
    transformClientToPageSpace: <T extends Rect | Point>(rectOrPoint: T, pageIndex: number) => T;
    transformPageToClientSpace: <T extends Rect | Point>(rectOrPoint: T, pageIndex: number) => T;
    exportPDF: (flags?: ExportPDFFlags) => Promise<ArrayBuffer>;
    exportXFDF: () => Promise<string>;
    exportInstantJSON: () => Promise<Object>;
    renderPageAsArrayBuffer: (options: {
        width: number;
    } | {
        height: number;
    }, pageIndex: number) => Promise<ArrayBuffer>;
    renderPageAsImageURL: (options: {
        width: number;
    } | {
        height: number;
    }, pageIndex: number) => Promise<string>;
    print: (printMode?: PrintModeType) => void;
    abortPrint: () => void;
    setCustomRenderers: (customRenderers: CustomRenderers) => void;
    getDocumentOutline: () => Promise<List<OutlineElement>>;
    setAnnotationCreatorName: (annotationCreatorName: string | null | undefined) => void;
    contentWindow: Window;
    contentDocument: Document;
    viewState: ViewState;
    setViewState: (stateOrFunction: ViewStateSetter | ViewState) => void;
    toolbarItems: ToolbarItem[];
    setToolbarItems: (stateOrFunction: ToolbarItemsSetter | ToolbarItem[]) => void;
    annotationPresets: {
        [key: string]: AnnotationPreset;
    };
    setAnnotationPresets: (stateOrFunction: AnnotationPresetsSetter | {
        [key: string]: AnnotationPreset;
    }) => void;
    setCurrentAnnotationPreset: (annotationPresetID: string | null | undefined) => void;
    currentAnnotationPreset: string | null | undefined;
    stampAnnotationTemplates: Array<StampAnnotation | ImageAnnotation>;
    setStampAnnotationTemplates: (stateOrFunction: StampAnnotationTemplatesSetter | Array<StampAnnotation | ImageAnnotation>) => void;
    getAnnotations: (pageIndex: number) => Promise<List<Annotation>>;
    createAttachment: (file: Blob) => Promise<string>;
    getAttachment: (attachmentId: string) => Promise<Blob>;
    calculateFittingTextAnnotationBoundingBox: (annotation: TextAnnotation) => TextAnnotation;
    createAnnotation: (annotation: Annotation) => Promise<Annotation>;
    updateAnnotation: (annotation: Annotation) => Promise<Annotation>;
    deleteAnnotation: (annotationId: ID) => Promise<void>;
    ensureAnnotationSaved: (annotation: Annotation) => Promise<Annotation>;
    hasUnsavedAnnotations: () => boolean;
    saveAnnotations: () => Promise<void>;
    getBookmarks: () => Promise<List<Bookmark>>;
    saveBookmarks: () => Promise<void>;
    createBookmark: (bookmark: Bookmark) => Promise<Bookmark>;
    updateBookmark: (bookmark: Bookmark) => Promise<Bookmark>;
    deleteBookmark: (bookmarkId: ID) => Promise<void>;
    ensureBookmarkSaved: (bookmark: Bookmark) => Promise<Bookmark>;
    hasUnsavedBookmarks: () => boolean;
    getFormFields: () => Promise<List<FormField>>;
    getFormFieldValues: () => {
        [key: string]: null | string | Array<string>;
    };
    setFormFieldValues: (formFieldValues: {
        [key: string]: null | string | Array<string>;
    }) => void;
    createFormField: (formField: FormField) => Promise<FormField>;
    updateFormField: (formField: FormField) => Promise<FormField>;
    deleteFormField: (formFieldName: FormFieldName) => Promise<void>;
    saveFormFields: () => Promise<void>;
    ensureFormFieldSaved: (formField: FormField) => Promise<FormField>;
    hasUnsavedFormFields: () => boolean;
    saveFormFieldValues: () => Promise<void>;
    hasUnsavedFormFieldValues: () => boolean;
    getTextSelection: () => Object | null | undefined;
    getSelectedAnnotation: () => Annotation | null | undefined;
    setSelectedAnnotation: (annotationOrAnnotationId: (Annotation | ID) | null | undefined) => void;
    setEditingAnnotation: (annotationOrAnnotationId: (Annotation | ID) | null | undefined, autoSelectText: boolean | null | undefined) => void;
    setCustomOverlayItem: (item: CustomOverlayItem) => void;
    removeCustomOverlayItem: (id: CustomOverlayItemID) => void;
    locale: string;
    setLocale: (arg0: string) => Promise<void>;
    getInkSignatures: () => Promise<List<InkAnnotation>>;
    setInkSignatures: (stateOrFunction: InkSignaturesSetter | List<InkAnnotation>) => Promise<void>;
    search: (term: string, options?: {
        startPageIndex?: number;
        endPageIndex?: number;
        searchType?: SearchTypeType;
        searchInAnnotations?: boolean;
    }) => Promise<List<SearchResult>>;
    startUISearch: (term: string) => void;
    searchState: SearchState;
    setSearchState: (stateOrFunction: SearchStateSetter | SearchState) => void;
    editableAnnotationTypes: Array<Class<Annotation>>;
    setEditableAnnotationTypes: (arg0: Array<Class<Annotation>>) => void;
    setIsEditableAnnotation: (arg0: IsEditableAnnotationCallback) => void;
    setIsEditableComment: (arg0: IsEditableCommentCallback) => void;
    hasUnsavedComments: () => boolean;
    saveComments: () => Promise<void>;
    getComments: () => Promise<List<Comment>>;
    getSignaturesInfo: () => Promise<SignaturesInfo>;
    signDocument: (arg0: SignaturePreparationData | null | undefined, arg1: TwoStepSignatureCallback | (SigningServiceData | null | undefined)) => Promise<void>;
    applyOperations: (arg0: Array<DocumentOperation>, arg1: Array<number> | null | undefined) => Promise<void>;
    exportPDFWithOperations: (arg0: Array<DocumentOperation>, arg1: Array<number> | null | undefined) => Promise<ArrayBuffer>;
    applyRedactions: () => Promise<void>;
    save: () => Promise<void>;
    hasUnsavedChanges: () => boolean;
    ensureChangesSaved: (changes: Change | Array<Change>) => Promise<Array<Change>>;
    create: (changes: Change | Array<Change> | List<Change>) => Promise<Array<Change>>;
    update: (changes: Change | Array<Change> | List<Change>) => Promise<Array<Change>>;
    delete: (ids: InstantID | Array<InstantID> | List<InstantID>) => Promise<Array<Change>>;
    createRedactionsBySearch: (term: string | SearchPatternType, options?: {
        searchType?: SearchTypeType;
        searchInAnnotations?: boolean;
        annotationPreset?: RedactionAnnotationPreset;
    }) => Promise<List<string>>;
    constructor({ store, backend, eventEmitter }: any);
}
export {};
